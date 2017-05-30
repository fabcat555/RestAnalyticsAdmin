<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchTermsControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetIndex()
    {
        $this->visit('/searchTerms')->see('login');
        $user = \App\User::find(1);
        $this->actingAs($user)->visit('/searchTerms')->seePageIs('searchTerms')->see("table");
    }
}
