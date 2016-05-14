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

Route::get('/', 'IndexController@index');

Route::resource('users', 'UsersController');

Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');

Route::get('admin', 'AdminController@index');
Route::resource('admin/users', 'AdminUsersController');
