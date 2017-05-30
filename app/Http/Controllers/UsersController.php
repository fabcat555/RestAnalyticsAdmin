<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use App\Http\Requests;

use GuzzleHttp\Client;

use App\UserViewModel;
use Yajra\Datatables\Datatables;

class UsersController extends Controller
{

    private $client;
    private $pageTitle;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://localhost/RestAnalytics/public/v1/'
        ]);

        $this->pageTitle = trans('messages.Users');
    }

    /**
     * @param string $criterion
     * @return Datatables UserViewModel data.
     */
    public function getUsersByCriterionData($criterion = 'language')
    {
        $response = $this->client->request('GET', "users/criterion/$criterion");

        $json = json_decode($response->getBody(), true);

        $viewModel = [];

        foreach ($json['result'] as $language)
        {
            $userViewModel = new UserViewModel();
            $userViewModel->key = $language['criterion'];
            $userViewModel->count = $language['activeUsers'];

            $viewModel[] = $userViewModel;
        }

        $users = new Collection($viewModel);

        return Datatables::of($users)->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Returns the users view.
     */
    public function getUsersByCriterion()
    {
        return view('users', ['pageTitle' => $this->pageTitle]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Returns the sessions view.
     */
    public function getUsersCount()
    {
        $response = $this->client->request('GET', 'activeSessions');

        $json = json_decode($response->getBody(), true);

        return view('sessions', ['activeSessions' => $json['activeSessions'], 'pageTitle' => $this->pageTitle]);
    }

    /**
     * @return mixed
     *
     * Returns the number of currently active users.
     */
    public function getActiveSessions()
    {
        $response = $this->client->request('GET', 'activeSessions');

        return json_decode($response->getBody(), true);
    }

    /**
     * @param $timeRange
     * @return mixed
     *
     * Returns the number of users within the $timeRange.
     */
    public function getUsersByTimeRange($timeRange)
    {
        $response = $this->client->request('GET', "users/timeRange/$timeRange");

        return json_decode($response->getBody(), true);
    }
}
