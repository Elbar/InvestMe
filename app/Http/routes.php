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
Route::group(['middleware' => 'web'],function(){
    Route::get('admin1',['middleware'=>'auth','uses'=>'AdminController@index']);
    Route::get('admin1/users',['middleware'=>'auth','as' => 'users', 'uses'=>'AdminController@users']);
    Route::get('admin1/users/{id}',['middleware'=>'auth','as' => 'users_id', 'uses'=>'AdminController@users_id']);
    Route::post('admin1/users/{id}',['middleware'=>'auth','as' => 'users_id_post', 'uses'=>'AdminController@users_id_post']);
    Route::get('admin1/users/{id}/delete',['middleware'=>'auth','as' => 'users_delete', 'uses'=>'AdminController@users_delete']);
    Route::get('prof',['middleware' => 'auth','uses'=>'UserController@index']);
    Route::post('password','UserController@change');
    Route::post('information/{id}','UserController@info');
});
Route::group(array('before' => 'admin1'), function(){
    Route::resource('categories','CategoryController');
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();


    Route::get('/', function () {
        return view('index');

    });
    Route::get('/new', function () {
        return view('project.new');
    });
    Route::get('/archive', function () {
        return view('project.archive');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/project','ProjectController@index');
    Route::get('/create','ProjectController@create');
    Route::get('/edit/{id}','ProjectController@edit');
    Route::post('/update/{id}','ProjectController@update');
    Route::get('/delete/{id}','ProjectController@delete');
    Route::post('/store','ProjectController@store');
    Route::get('/show/{id}','ProjectController@show');


    Route::get('/settings', function () {
        return view('settings');
    });

    Route::get('/profile', function () {
        return view('profile');
    });
});


