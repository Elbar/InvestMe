<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ResetPasswordTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLinkResetPassword()
    {
        $this->visit('/login')
            ->click('Забыли пароль?')
            ->seePageIs('/password/reset');
    }

    public function testResetPassword()
    {
        $this->visit('/password/reset')
            ->type('Lorem@mail.com', 'email')
            ->press('Send Password Reset Link')
            ->seePageIs('/password/reset');
    }

}