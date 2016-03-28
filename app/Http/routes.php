<?php

use Illuminate\Http\Request;
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
    Route::get('admin',['middleware'=>['auth','admin'],'uses'=>'AdminController@index']);
    Route::get('admin/users',['middleware'=>'auth','as' => 'users', 'uses'=>'AdminController@users']);
    Route::get('admin/users/{id}',['middleware'=>'auth','as' => 'users_id', 'uses'=>'AdminController@users_id']);
    Route::post('admin/users/{id}',['middleware'=>'auth','as' => 'users_id_post', 'uses'=>'AdminController@users_id_post']);
    Route::get('admin/users/{id}/delete',['middleware'=>'auth','as' => 'users_delete', 'uses'=>'AdminController@users_delete']);
    Route::get('prof',['middleware' => 'auth','uses'=>'UserController@index']);
    Route::post('password','UserController@change');
    Route::post('information/{id}','UserController@info');
    Route::get('empty','MainController@empty1');
    Route::get('category','CategoryController@index');
    Route::get('category/edit/{id}','CategoryController@edit');
    Route::post('category/{id}','CategoryController@update');
    Route::get('category/delete/{id}','CategoryController@destroy');
    Route::resource('backer','BackerController');
});
Route::group(array('before' => 'admin'), function(){
    Route::resource('categories','CategoryController');
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
        return view('index');

    });
    Route::get('/creator',['middleware'=>'auth','uses'=>'CreatorController@index']);
    Route::post('/creator/add','CreatorController@add');
    Route::get('/new',['middleware'=>'auth','uses'=>'ProjectController@add_new']);
    Route::get('/archive', function () {
        return view('project.archive');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/project','ProjectController@index');
    Route::post('/create','ProjectController@create');
    Route::get('/edit/{id}','ProjectController@edit');
    Route::post('/update/{id}','ProjectController@update');
    Route::get('/delete/{id}','ProjectController@delete');
    Route::post('/store','ProjectController@store');
    Route::get('/show/{id}','ProjectController@show')->where(['id'=>'[0-9]+']);


    Route::get('/settings', function () {
        return view('settings');
    });

    Route::get('/profile', function () {
        return view('profile');
    });
});


