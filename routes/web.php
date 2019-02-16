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
});

Route::group(['domain' => 'www.cohett.tk'], function(){
	Route::get('/', function () {
        return view('welcome');
    });
    
});

Route::group(['domain' => '{subdomain}.cohett.tk'], function(){
    Route::get('/{page?}', 'FrontEndController@inSubDomain');
});


Route::group(['domain' => '{domain}'], function(){
	Route::get('/', function($domain){
		$array_url = explode('.', $domain);
		if(count($array_url) === 2){
			return '<p>Está accediendo desde un dominio externo a la plataforma</p>
				   <p>Dominio: '.$domain.'</p>';
		}else if(count($array_url) === 3){
			return '<p>Está accediendo desde un dominio con subdominio externo a la plataforma</p>
				    <p>SubDominio: '.$array_url[0].'</p>
				    <p>Dominio: '.$array_url[1].'.'.$array_url[2].'</p>';
		}
	});
});

/*Route::group(['domain' => '{subdomain}.app.{domain}'], function(){
    Route::get('/{page?}', 'FrontEndController@outSubDomain');
});

Route::group(['domain' => '{domain}'], function(){
    Route::get('/{page?}', 'FrontEndController@outDomain');
});*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
