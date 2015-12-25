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

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::get('admin', 'Admin\AdminController@index');

Route::get('admin/articles', 'Admin\ArticlesController@index');
Route::get('admin/articles/create', 'Admin\ArticlesController@create');
Route::post('admin/articles', 'Admin\ArticlesController@store');

