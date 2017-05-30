<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\SearchTermViewModel;

use App\Http\Requests;
use Yajra\Datatables\Datatables;

class SearchTermsController extends Controller
{
    private $client;
    private $pageTitle;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://localhost/RestAnalytics/public/v1/'
        ]);

        $this->pageTitle = trans('messages.SearchTerms');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Returns the searchTerms view.
     */
    public function getIndex()
    {
        return view('searchTerms', ['pageTitle' => $this->pageTitle]);
    }

    /**
     * @return Datatables SearchTermViewModel data.
     */
    public function getData()
    {
        $response = $this->client->request('GET', 'searchTerms');

        $json = json_decode($response->getBody(), true);

        $viewModel = [];

        foreach ($json['searchTerms'] as $searchTerm)
        {
            $searchTermViewModel = new SearchTermViewModel();
            $searchTermViewModel->setSearchTerm($searchTerm['search_term']);
            $searchTermViewModel->setHits($searchTerm['hits']);

            $viewModel[] = $searchTermViewModel;
        }

        $searchTerms = new Collection($viewModel);

        return Datatables::of($searchTerms)->make(true);
    }
}
