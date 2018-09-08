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
Route::get('/', function () {
    return view('welcome');
});
*/

//Route the main pages
Route::get('/login', 'PagesController@login');
Route::get('/', 'PagesController@dashboard');
Route::get('/gtwelve', 'PagesController@gtwelve');
Route::get('/monthly', 'PagesController@monthly');
Route::get('/weekly', 'PagesController@weekly');
Route::get('/downloads', 'PagesController@downloads');

//Route the view pages
Route::get('/viewr', 'PagesController@viewr');
Route::get('/synodr', 'PagesController@synodr');

//Route the create pages

Route::get('/cuser', 'PagesController@cuser');


Route::get('/cbranch', 'PagesController@cbranch');
Route::get('/cgtwelve', 'PagesController@cgtwelve');
Route::get('/cevent', 'PagesController@cevent');
Route::get('/cpastor', 'PagesController@cpastor');
Route::get('/cpreacher', 'PagesController@cpreacher');
Route::get('/cdownloads', 'PagesController@cdownloads');
Route::get('/czone', 'PagesController@czone');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth Routes

Route::post('/custom/register', [
	'uses' => 'RegisterController@register',
	'as' => 'customRegister'
	]);
	
	
Route::post('/custom/login', [
	'uses' => 'LoginController@login',
	'as' => 'customLogin'
	]);
	
Route::post('/save/monthly', [
	'uses' => 'SaveController@saveMonthly',
	'as' => 'saveMonthly'
	]);
	
Route::post('/save/weekly', [
	'uses' => 'SaveController@saveWeekly',
	'as' => 'saveWeekly'
	]);
	
Route::post('/save/g12', [
	'uses' => 'SaveController@saveG12',
	'as' => 'saveG12'
	]);
	
Route::post('/save/branch', [
	'uses' => 'SaveController@saveBranch',
	'as' => 'saveBranch'
	]);

Route::post('/save/event', [
	'uses' => 'SaveController@saveEvent',
	'as' => 'saveEvent'
	]);
	
Route::post('/create/download', [
	'uses' => 'SaveController@createDownload',
	'as' => 'createDownload'
	]);
	
	
Route::post('/create/g12', [
	'uses' => 'SaveController@createG12',
	'as' => 'createG12'
	]);

Route::post('/create/category', [
	'uses' => 'SaveController@createCategory',
	'as' => 'createCategory'
	]);

Route::post('/create/zone', [
	'uses' => 'SaveController@createZone',
	'as' => 'createZone'
	]);

Route::post('/edit/zone', [
	'uses' => 'SaveController@editZone',
	'as' => 'editZone'
	]);

Route::post('/edit/user', [
	'uses' => 'SaveController@editUser',
	'as' => 'editUser'
	]);

Route::post('/edit/g12', [
	'uses' => 'SaveController@editG12',
	'as' => 'editG12'
	]);

	Route::post('/edit/download', [
		'uses' => 'SaveController@editDownload',
		'as' => 'editDownoad'
		]);


	Route::post('/edit/event', [
		'uses' => 'SaveController@editEvent',
		'as' => 'editEvent'
		]);

	Route::post('/delete/download', [
		'uses' => 'SaveController@deleteDownload',
		'as' => 'deleteDownload'
		]);

	Route::post('/delete/branch', [
		'uses' => 'SaveController@deleteBranch',
		'as' => 'deleteBranch'
		]);

	Route::post('/delete/zone', [
		'uses' => 'SaveController@deleteZone',
		'as' => 'deleteZone'
		]);

	Route::post('/delete/event', [
		'uses' => 'SaveController@deleteEvent',
		'as' => 'deleteEvent'
		]);

	Route::post('/delete/g12', [
		'uses' => 'SaveController@deleteG12',
		'as' => 'deleteG12'
		]);

	Route::post('/delete/user', [
		'uses' => 'SaveController@deleteUser',
		'as' => 'deleteUser'
		]);

		

	Route::post('/delete/category', [
		'uses' => 'SaveController@deleteCategory',
		'as' => 'deleteCategory'
		]);

	
Route::post('/upload/file', [
	'uses' => 'SaveController@uploadFile',
	'as' => 'uploadFile'
	]);
	
Route::get('/get/all/downloads', [
	'uses' => 'SaveController@allDownloads',
	'as' => 'allDownloads'
	]);

Route::get('/get/all/categories', [
	'uses' => 'SaveController@allCategories',
	'as' => 'allCategories'
	]);

Route::get('/get/all/users', [
	'uses' => 'SaveController@allUsers',
	'as' => 'allUsers'
	]);

Route::get('/get/country/zones/{country}', [
	'uses' => 'SaveController@countryZones',
	'as' => 'countryZones'
	]);

Route::get('/get/branch/events/{branch}', [
	'uses' => 'SaveController@branchEvents',
	'as' => 'branchEvents'
	]);

Route::get('/get/category/uploads/{category}', [
	'uses' => 'SaveController@categoryUploads',
	'as' => 'categoryUploads'
	]);

Route::get('/get/branch/g12s/{branch}', [
	'uses' => 'SaveController@branchG12s',
	'as' => 'branchG12s'
	]);


Route::get('/get/country/branches/{country}', [
	'uses' => 'SaveController@countryBranches',
	'as' => 'countryBranches'
	]);


	