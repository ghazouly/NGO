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
  Route::group(['prefix' => '/masterAdmin'], function () {
    Route::group(['middleware' => 'auth'], function () {
      Route::resource('/post','Admin\PostController');
      // Route::resource('/category','Admin\CategoryController');
      Route::resource('/user','Admin\UserController');
    });
  Route::get('/','Admin\AuthController@index');
  Route::post('/login','Admin\AuthController@login');
  Route::get('/logout','Admin\AuthController@logout');
});

Route::get('/','Site\SiteController@index');
Route::get('/post/{id}','Site\SiteController@showPost');
Route::get('/cate/{id}','Site\SiteController@show');
