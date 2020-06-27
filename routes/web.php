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
    return view('welcome');
});

Route::get('/login/facebook', 'Auth\LoginController@redirectToFacebookProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderFacebookCallback');
Route::get('/new_profile_post', 'RouteController@newProfilePost');
Route::get('/new_page_post', 'RouteController@newPagePost');

Route::group(['middleware' => [
    'auth'
]], function(){
 
    Route::get('/user', 'GraphController@retrieveUserProfile');
 
    Route::post('/user', 'GraphController@publishToProfile');

    Route::post('/page', 'GraphController@publishToPage');
 
});

//Artisan Command Routes
Route::get('/config-clear', function() {
	$status = Artisan::call('config:clear');
	return '<h1>Configurations cleared</h1>';
});
Route::get('/cache-clear', function() {
	$status = Artisan::call('cache:clear');
	return '<h1>Cache cleared</h1>';
});
Route::get('/config-cache', function() {
	$status = Artisan::call('config:Cache');
	return '<h1>Configurations cache cleared</h1>';
});
Route::get('/route-clear', function() {
	$status = Artisan::call('route:clear');
	return '<h1>Routes cache cleared</h1>';
});
Route::get('/view-clear', function() {
	$status = Artisan::call('view:clear');
	return '<h1>Compiled views cleared</h1>';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
