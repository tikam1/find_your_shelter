<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('website.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('admin', function() {
    return 'You are not an admin';
})->middleware('admin');

Route::get('/help', function() {
    return view('website.help');
});

Route::get('/about', function() {
   return view('website.about');
});

Route::get('/contact', function() {
    return view('website.contact');
});

Route::get('user/index', 'UserController@index');

Route::get('property/add', function() {
    return view('property.add');
});

Route::get('dashboard', function() {
    return view('admin.dashboard');
});