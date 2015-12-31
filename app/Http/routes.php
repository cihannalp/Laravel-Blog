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
//page routes
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//
Route::get('role', 'RoleController@createRole');
Route::get('permission','PermissionController@createPermission');

Route::get('articles','ArticleController@index');


Route::group(['middleware' => 'auth'], function()
{
	Route::get('admin', 'Admin\AdminController@index');
	Route::resource('admin/articles', 'Admin\ArticlesController');
});


Route::resource('admin/users', 'Admin\UsersController');

