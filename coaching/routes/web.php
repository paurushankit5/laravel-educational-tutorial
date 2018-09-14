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

Route::get('/', 'HomeController@index');
Route::get('/test2', 'HomeController@test2');
Route::get('/test', function () {
    return view('front/test');
});

Route::get('/google-oauth2', 'Auth\LoginController@redirectToProvider');
Route::get('/google-oauth2/response', 'Auth\LoginController@handleProviderCallback');


//after login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userrolecheck', 'HomeController@userrolecheck')->name('userrolecheck');
Route::get('/dashboard', 'UserController@dashboard')->name('home');
Auth::routes();

//course Frontend
Route::get('/course/{cat_slug}','CategoryController@catDetails');
Route::get('/course/{cat_slug}/{course_slug}','CourseController@courseDetails');

//tags frontend
Route::get('/tags/{tag_slug}','TagController@tagDetails');



// Trainer Routes starts here
Route::group(['prefix'=>'trainer','middleware' => 'TrainerCheck'], function(){
	Route::get('/mycourses', 'TrainerController@mycourses')->name('trainercourses');
	Route::get('/addcourse', 'TrainerController@addcourse')->name('traineraddcourse');
	Route::post('/uploadimage', 'TrainerController@uploadimage')->name('uploadimage');

});
//Trainer routes ends here

// Admin Routes starts here
Route::group(['prefix'=>'admin','middleware' => 'AdminCheck'], function(){
 	Route::get('/', ['as'	 => 'adminDashboard', 'uses' => 'AdminController@index']);
	

	
	//category
	Route::get('/category','AdminController@category')->name('adminCategory');
	Route::post('/addcategory','AdminController@storecategory')->name('storecategory');
	Route::post('/updatecategory','AdminController@updatecategory')->name('updatecategory');



	//tags
	Route::get('/tags','AdminController@tags')->name('adminTags');
	Route::post('/addtags','AdminController@addtags')->name('addtags');
	Route::post('/updatetag','AdminController@updatetag')->name('updatetag');



	//courses
	Route::get('/courses','AdminController@courses')->name('adminCourses');
	Route::get('/course/details/{id}','AdminController@coursedetails')->name('adminCourseDetails');
	Route::get('/HomePageCourse','AdminController@homepagecourse')->name('adminhomepagecourse');
	Route::post('/storecourse','AdminController@storecourse')->name('storecourse');
	Route::post('/storesection','AdminController@storesection')->name('storesection');
	Route::post('/storelecture','AdminController@storelecture')->name('storelecture');
	Route::post('/changecoursestatus','AdminController@seo')->name('changecoursestatus');
	Route::post('/sethomepagecourse','AdminController@sethomepagecourse')->name('sethomepagecourse');
	Route::post('/updatehomepagecourse','AdminController@updatehomepagecourse')->name('updatehomepagecourse');
	Route::post('/removehomepagecourse','AdminController@removehomepagecourse')->name('removehomepagecourse');



	//seo
	Route::get('/seo','AdminController@seo')->name('adminSeo');
	Route::post('/saveseo','AdminController@saveseo')->name('adminSaveseo');
	Route::post('/updateseo','AdminController@updateseo')->name('adminUpdateseo');

});
//Admin routes end here