<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Collection;
use Yajra\Datatables\Datatables;

use App\PageViewModel;

use App\Http\Requests;

class PagesController extends Controller
{
    private $client;
    private $pageTitle;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://fabcatuv.esy.es/RestAnalytics/v1/'
        ]);

        $this->pageTitle = trans('messages.PagesButtons');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Returns the index view.
     */
    public function getIndex()
    {
        return view('pages', ['showVisits' => true, 'showAvg' => false,
            'showExitCount' => false, 'title' => 'Pagine più visitate', 'pageTitle' => $this->pageTitle]);
    }

    /**
     * @return Datatables PagesViewModel data.
     */
    public function getData()
    {
        $response = $this->client->request('GET', 'pages');

        $json = json_decode($response->getBody(), true);

        $viewModel = [];

        foreach ($json['pages'] as $page)
        {
            $pageViewModel = new PageViewModel();
            $pageViewModel->url = $page['url'];
            $pageViewModel->visits = $page['visits'];

            $viewModel[] = $pageViewModel;
        }

        $pages = new Collection($viewModel);

        return Datatables::of($pages)->make(true);
    }

    /**
     * @return Datatables PagesViewModel data.
     */
    public function getPagesAverageLoadTimeData()
    {
        $response = $this->client->request('GET', 'pagesAverageLoadingTime');

        $json = json_decode($response->getBody(), true);

        $viewModel = [];

        foreach ($json['pages'] as $page)
        {
            $pageViewModel = new PageViewModel();
            $pageViewModel->url = $page['url'];
            $pageViewModel->avgLoadingTime = $page['average_load_time'];

            $viewModel[] = $pageViewModel;
        }

        $pages = new Collection($viewModel);

        return Datatables::of($pages)->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Returns the pagesAvg view.
     */
    public function getPagesAverageLoadTime()
    {
        return view('pagesAvg', ['showVisits' => false, 'showAvg' => true,
            'showExitCount' => false, 'title' => 'Pagine per tempo di caricamento', 'pageTitle' => $this->pageTitle]);
    }

    /**
     * @return Datatables PagesViewModel data.
     */
    public function getExitPagesData()
    {
        $response = $this->client->request('GET', 'exitPages');

        $json = json_decode($response->getBody(), true);

        $viewModel = [];

        foreach ($json['exitPages'] as $page)
        {
            $pageViewModel = new PageViewModel();
            $pageViewModel->url = $page['url'];
            $pageViewModel->exitCount = $page['exitCount'];

            $viewModel[] = $pageViewModel;
        }

        $pages = new Collection($viewModel);

        return Datatables::of($pages)->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * returns the exitPages view.
     */
    public function getExitPages()
    {
        return view('exitPages', ['showVisits' => false, 'showAvg' => false,
            'showExitCount' => true, 'title' => 'Pagine di uscita', 'pageTitle' => $this->pageTitle]);
    }
}
