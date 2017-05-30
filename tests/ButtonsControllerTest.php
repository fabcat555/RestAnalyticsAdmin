<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ButtonsControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetIndex()
    {
        $this->visit('/buttons')->see('login');
        $user = \App\User::find(1);
        $this->actingAs($user)->visit('/buttons')->seePageIs('buttons')->see("table");
    }
}
