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

//Route the create pages

Route::get('/cuser', 'PagesController@cuser');


Route::get('/cbranch', 'PagesController@cbranch');
Route::get('/cgtwelve', 'PagesController@cgtwelve');
Route::get('/cevent', 'PagesController@cevent');
Route::get('/cpastor', 'PagesController@cpastor');
Route::get('/cpreacher', 'PagesController@cpreacher');
Route::get('/cdownloads', 'PagesController@cdownloads');
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
	
Route::post('/upload/file', [
	'uses' => 'SaveController@uploadFile',
	'as' => 'uploadFile'
	]);
	
Route::get('/get/all/downloads', [
	'uses' => 'SaveController@allDownloads',
	'as' => 'allDownloads'
	]);
	