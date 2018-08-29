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

Route::get('/', function () {
    return view('front/index');
});
Route::get('/test', function () {
    return view('front/test');
});

Route::get('/google-oauth2', 'Auth\LoginController@redirectToProvider');
Route::get('/google-oauth2/response', 'Auth\LoginController@handleProviderCallback');


//after login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();



// Admin Routes starte here
Route::group(['prefix'=>'admin','middleware' => 'AdminCheck'], function(){
	Route::get('connect', ['as' => 'connect', 'uses' => 'AccountController@connect']);
	Route::get('/', ['as'	 => 'adminDashboard', 'uses' => 'AdminController@index']);
	Route::get('/category','AdminController@category')->name('adminCategory');
	Route::post('/addcategory','AdminController@storecategory')->name('storecategory');
	Route::post('/updatecategory','AdminController@updatecategory')->name('updatecategory');
});
//Admin routes end here