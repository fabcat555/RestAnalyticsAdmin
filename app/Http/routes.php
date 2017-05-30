<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'auth'], function () {

    // Route::get('/', 'UsersController@getUsersByCriterion');
    Route::get('/users/data/{criterion?}', 'UsersController@getUsersByCriterionData')->name('users.data');
    Route::get('/users/{criterion?}', 'UsersController@getUsersByCriterion');
    Route::get('/usersCount', 'UsersController@getUsersCount');
    Route::get('/activeSessions', 'UsersController@getActiveSessions');
    Route::get('/timeRange/{timeRange}', 'UsersController@getUsersByTimeRange');

    Route::controller('pages', 'PagesController', [
        'getData' => 'pages.data',
        'getPagesAverageLoadTimeData' => 'pagesAvg.data',
        'getExitPagesData' => 'exitPages.data',
    ]);
    Route::get('/pages', 'PagesController@getIndex');
    Route::get('/pagesAverageLoadingTime', 'PagesController@getPagesAverageLoadTime');
    Route::get('/exits', 'PagesController@getExitPages');

    Route::get('/buttons/data', 'ButtonsController@getData')->name('buttons.data');
    Route::get('buttons', 'ButtonsController@getIndex');

    Route::get('/searchTerms/data', 'SearchTermsController@getData')->name('searchTerms.data');
    Route::get('searchTerms', 'SearchTermsController@getIndex');

    Route::get('/statistics', 'StatisticsController@index');
});

Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@authenticate');
Route::get('logout', 'LoginController@logout');
