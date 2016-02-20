<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::resource("task","taskcontroller");

Route::group(['prefix' => 'api/v1'], function () {
    //Route::post('users', 'UserController@store');
    //Route::put('users', 'UserController@update');
    //Route::delete('users/{id}', 'UserController@destroy');
    Route::get('tasks', 'taskcontroller@getAllData');
});

Route::group([], function () {
    Route::resource('tasks', 'taskcontroller',
        ['only' => ['index', 'create', 'edit','store']]);
});