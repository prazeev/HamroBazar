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

Route::group([], function () {
   Route::get('/', 'SiteController@index')->name('site');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['middleware' => 'auth'], function() {
        Route::resource('category', 'CategoryController');
    });
});
