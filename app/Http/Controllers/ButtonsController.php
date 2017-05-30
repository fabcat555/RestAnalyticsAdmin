<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use Illuminate\Database\Eloquent\Collection;
use Yajra\Datatables\Datatables;

use App\ButtonViewModel;

use App\Http\Requests;

class ButtonsController extends Controller
{
    private $client;
    private $pageTitle;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://localhost/RestAnalytics/public/v1/'
        ]);

        $this->pageTitle = trans('messages.PagesButtons');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Returns the buttons view.
     */
    public function getIndex()
    {
        return view('buttons', ['pageTitle' => $this->pageTitle]);
    }

    /**
     * @return Datatables ButtonViewModel data
     */
    public function getData()
    {
        $response = $this->client->request('GET', 'buttons');

        $json = json_decode($response->getBody(), true);

        $viewModel = [];

        foreach ($json['buttons'] as $button)
        {
            $buttonViewModel = new ButtonViewModel();
            $buttonViewModel->buttonId = $button['button_id'];
            $buttonViewModel->clicks = $button['clicks'];

            $viewModel[] = $buttonViewModel;
        }

        $buttons = new Collection($viewModel);

        return Datatables::of($buttons)->make(true);
    }
}
