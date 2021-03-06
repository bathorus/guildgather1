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
Route::auth();

Route::get('/', 'HomeController@index');

//article
Route::get('/article/', 'ArticleController@index');

//about
Route::get('/about/', 'HomeController@about');

//subscribe
Route::post('/subscribe/store', 'HomeController@subscribe');