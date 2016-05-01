<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('ensure we can visit the about page from the home page');
$I->amOnPage('index.php');
$I->click('О нас');
$I->see('О нас', 'h1');

