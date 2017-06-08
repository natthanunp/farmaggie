<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/farm/register', function () {

    return view('farmaggie.register');
});

Route::get('/farm/login', function () {

    return view('farmaggie.login');
});
Route::get('/farm/dashboard', function () {

    return view('farmaggie.dashboard');
});
Route::get('/farm/addfarm', function () {

    return view('farmaggie.addfarm');
});
