<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;

class FunctionalTests extends TestCase
{
    /** @test */
    public function guestSignUp()
    {
        /* SCENARIO
         * I AM: A guest
         * I WANT TO: Sign up for a friendbook account
         */
        $this->visit('/')
             ->see('Waste time with Friendbook')
             ->click('Sign up!')
             ->seePageIs('/register')
             ->type('JohnDoe', 'name')
             ->type('john@example.com', 'email')
             ->type('JohnDoe', 'password')
             ->type('JohnDoe', 'password_confirmation')
             ->press('Sign up')
             ->seePageIs('/welcome')
             ->see('Welcome to Friendbook!')
             ->seeInDatabase('users', [
                'name' => 'JohnDoe',
                'email'    => 'john@example.com'
             ])
             ->assertTrue(Auth::check());
    }
}