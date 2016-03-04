<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/** Main routes */

Route::get('/', function () {
    return view('index');
});
Route::get('/new', function () {
    return view('new');
});
Route::get('/archive', function () {
    return view('archive');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/profile', function () {
    return view('profile');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

});
