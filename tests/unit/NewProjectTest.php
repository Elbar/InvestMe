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
            ->seePageIs('/new');

    }

    public function testCreateProject()
    {
        $this->withoutMiddleware()
            ->visit('/new')
//            ->type('Lorem', 'name')
//            ->check('Еда', 'category')
//            ->attach('../img/c-text.png', 'file')
//            ->type('secret123', 'password_confirmation')
//            ->press('Сохранить')
            ->seePageIs('/new');
    }
}
