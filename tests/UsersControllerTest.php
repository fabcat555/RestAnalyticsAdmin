<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetUsersByCriterion()
    {
        $this->visit('/users')->see('login');
        $user = \App\User::find(1);
        $this->actingAs($user)->visit('/users')->seePageIs('users')->see("table");
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetUsersByTimeRange()
    {
        $this->visit('/usersCount')->see('login');
        $user = \App\User::find(1);
        $this->actingAs($user)->visit('/usersCount')->seePageIs('usersCount')->see("activeSessionsValue");
    }
}
