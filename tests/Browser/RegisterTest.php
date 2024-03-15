<?php

namespace Tests\Browser;

use Tests\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends Browser
{
    use DatabaseMigrations;

    public function testUserRegistration()
    {
        $this->browse(function ($browser) {
            $browser->visit('/register')
                    ->type('name', 'John Doe')
                    ->type('email', 'john@example.com')
                    ->type('password', 'password123')
                    ->type('password_confirmation', 'password123')
                    ->press('Register')
                    ->assertPathIs('/dashboard');
        });
    }
}
