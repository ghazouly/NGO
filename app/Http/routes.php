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


Route::resource('/','PostsController');

Route::get('about','CatagoriesController@about');
Route::get('contact','CatagoriesController@contact');

Route::get('articles','CatagoriesController@articles');
Route::get('campaigns','CatagoriesController@campaigns');
Route::get('files','CatagoriesController@files');
Route::get('legalsupport','CatagoriesController@legalsupport');
Route::get('newsfeed','CatagoriesController@newsfeed');
Route::get('newsletters','CatagoriesController@newsletters');
Route::get('releases','CatagoriesController@releases');
Route::get('reports','CatagoriesController@reports');
