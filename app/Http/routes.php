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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', 'PageController@about');
Route::get('/admin', 'AdminController@index');
Route::resource('ajax/page', 'PageAdminController');

Route::get('/items', 'ItemsController@items');
Route::get('/admin', 'AdminController@index');
Route::resource('ajax/items', 'itemsAdminController');

Route::get('/proto1', function () {
    return view('home_prototype');
});

Route::get('/gallery', function () {
    return view('gallery');
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
