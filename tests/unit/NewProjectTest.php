<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NewProjectTest extends TestCase
{
    public function testLinkLogin()
    {
        $this->visit('/')
            ->click('Создать проект')
            ->seePageIs('/login')
            ->type('Lorem@mail.com', 'email')
            ->type('secret123','password')
            ->see('/new')
            ->type('1234', 'postcode')
            ->type('country', '')
            ->type('home_address', 'lorem')
            ->press('next')
            ->see('/new')
            ->refreshApplication();

    }

//   public function testCreateProject()
//    {
//           $this->withoutMiddleware()
//            ->visit('/new')
//            ->seePageIs('/new');
//    }
}
