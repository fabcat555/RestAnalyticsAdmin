<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetIndex()
    {
        $this->visit('/pages')->see('login');
        $user = \App\User::find(1);
        $this->actingAs($user)->visit('/pages')->seePageIs('pages')->see("table");
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetPagesAverageLoadingTime()
    {
        $this->visit('/pagesAverageLoadingTime')->see('login');
        $user = \App\User::find(1);
        $this->actingAs($user)->visit('/pagesAverageLoadingTime')
            ->seePageIs('pagesAverageLoadingTime')->see("table");
    }
}
