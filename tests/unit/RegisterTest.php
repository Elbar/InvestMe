<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLinkRegistration()
    {
        $this->visit('/')
            ->click('Регистрация')
            ->seePageIs('/register')
            ->refreshApplication();

    }

    public function testNewUserRegistration()
    {
        $this->visit('/register')
            ->type('Lorem', 'name')
            ->type('Lorem@mail.com', 'email')
            ->type('secret123', 'password')
            ->type('secret123', 'password_confirmation')
            ->press('Регистрация')
            ->seePageIs('/register')
            ->seeStatusCode("200")
            ->refreshApplication();
    }
}
