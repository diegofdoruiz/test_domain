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

Route::group(['domain' => 'cohett.tk'], function(){
	Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['domain' => 'www.cohett.tk'], function(){
	Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    
});

Route::group(['domain' => '{subdomain}.cohett.tk'], function(){
    Route::get('/{page?}', 'FrontEndController@inSubDomain');
});

Route::group(['domain' => '{domain}'], function(){
    Route::get('/{page?}', 'FrontEndController@outDomain');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
