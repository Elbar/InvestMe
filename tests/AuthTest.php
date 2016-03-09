<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLinkLogin()
    {
      $this->visit('/')
          ->click('Вход')
          ->seePageIs('/login');

    }

    public function testUserLogin()
    {
        $this->visit('/login')
            ->type('Lorem@mail.com', 'email')
            ->type('secret123', 'password')
            ->press('Войти')
            ->seeInDatabase('users', ['email' => 'Lorem@mail.com', 'name'=>'Lorem'])
            ->seePageIs('/');
    }





}
