<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StatisticsControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetIndex()
    {
        $this->visit('/statistics')->see('login');
        $user = \App\User::find(1);
        $this->actingAs($user)->visit('/statistics')
        ->seePageIs('statistics')->see("%")->see("ms");
    }
}
