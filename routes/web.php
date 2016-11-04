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

Route::get('/help', function() {
    return view('website.help');
});

Route::get('/about', function() {
   return view('website.about');
});

Route::get('/contact', function() {
    return view('website.contact');
});

Route::get('admin/dashboard','AdminController@dashboard');

Route::get('admin/options', function() {
    return view('admin.options');
});

Route::get('admin/help', function() {
    return view('admin.help');
});

Route::get('property/add', function() {
    return view('property.add');
});

Route::post('property/store', 'AdminController@add');

Route::get('admin/search', 'AdminController@search');

Route::get('view/reservations', 'ReservationController@show');

Route::get('property/{id}/show/admin', 'PropertyController@showAdmin');

Route::get('property/update/{id}', 'AdminController@update');

Route::resource('property', 'PropertyController');

Route::get('property/delete/{id}', 'AdminController@delete');

Route::get('user/dashboard', 'UserController@dashboard');

Route::get('user/search', 'UserController@search');

Route::get('property/{id}/show/user', 'PropertyController@showUser');

Route::get('proceed/reserve/{id}', 'UserController@proceed');

Route::post('submit/form/{id}', 'ReservationController@submit');

Route::resource('user/reserved/property', 'UserController');

Route::get('delete/reservation/{id}', 'ReservationController@delete');