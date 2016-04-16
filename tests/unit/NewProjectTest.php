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
            ->seeStatusCode("200")
            ->refreshApplication();

    }

    public function testCreateProject()
    {
        $this->withoutMiddleware()
            ->visit('/new')
            ->seePageIs('/new');
    }
}
