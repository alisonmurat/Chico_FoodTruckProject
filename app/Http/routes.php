<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Blade::setContentTags('<%', '%>');				// for variables and all things Blade
// Blade::setEscapedContentTags('<%%', '%%>');		// for escaped data

Route::get('/aboutus', 'PageController@about');
Route::get('/admin', 'AdminController@index');
Route::resource('ajax/page', 'PageAdminController');

Route::get('/menu', 'ItemsController@items');
Route::get('/admin', 'AdminController@index');
Route::resource('ajax/items', 'ItemsAdminController');

Route::get('/gallery', 'GalleryController@gallery');
Route::get('/admin', 'AdminController@index');
Route::resource('ajax/gallery', 'GalleryAdminController');

Route::get('/location', 'LocationController@location');
Route::get('/admin', 'AdminController@index');
Route::resource('ajax/location', 'LocationAdminController');

Route::get('/', function () {
    return view('first');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
