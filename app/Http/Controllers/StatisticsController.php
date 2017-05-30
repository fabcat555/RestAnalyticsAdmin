<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\StatisticsViewModel;

use App\Http\Requests;

class StatisticsController extends Controller
{
    private $client;
    private $pageTitle;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://localhost/RestAnalytics/public/v1/'
        ]);

        $this->pageTitle = trans('messages.Statistics');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Returns the statistics view.
     */
    public function index()
    {
        $statsValueViewModel = new StatisticsViewModel();

        $json = json_decode($this->client->request('GET', 'bounceRate')->getBody(), true);
        $statsValueViewModel->setBounceRate(round($json['bounceRate'][0]['bounce_rate'], 3));

        $json = json_decode($this->client->request('GET', 'averageSessionTime')->getBody(), true);
        $statsValueViewModel->setAvgSessionTime(round($json['averageSessionTime'], 1));

        $json = json_decode($this->client->request('GET', 'averageLoadingTime')->getBody(), true);
        $statsValueViewModel->setAvgLoadingTime(round($json['averageLoadingTime'], 1));

        $json = json_decode($this->client->request('GET', 'pagesPerSession')->getBody(), true);
        $statsValueViewModel->setPagesPerSession(round($json['pagesPerSession'][0]['pages_per_session'], 2));

        return view('statistics', ['statistics' => $statsValueViewModel, 'pageTitle' => $this->pageTitle]);
    }
}
