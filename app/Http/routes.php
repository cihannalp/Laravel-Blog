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

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@register');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['middleware'=>['role:admin|author|user']], function()
{
	Route::get('articles/{id}/comment/create','CommentsController@create');
	Route::post('articles/{id}','CommentsController@store');
	Route::get('articles/comment/{id}/edit','CommentsController@edit');
	Route::put('articles/comment/{id}','CommentsController@update');
	Route::get('articles/comment/{id}/destroy','CommentsController@destroy');
});


Route::get('articles','ArticleController@index');
Route::get('articles/{id}','ArticleController@show');




Route::group(['middleware' => ['role:admin']], function()
{
	Route::resource('admin/users', 'Admin\UsersController');
});


Route::group(['middleware' => ['role:admin|author']], function()
{
	Route::get('admin', 'Admin\AdminController@index');
	Route::resource('admin/articles', 'Admin\ArticlesController');
});


