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

Route::get('admin/dashboard','AdminController@dashboard')->middleware('admin');

Route::get('admin/options', function() {
    return view('admin.options');
})->middleware('admin');

Route::get('admin/help', function() {
    return view('admin.help');
})->middleware('admin');

Route::get('property/add', function() {
    return view('property.add');
})->middleware('admin');

Route::post('property/store', 'AdminController@add')->middleware('admin');

Route::get('admin/search', function() {
    return view('admin.search');
})->middleware('admin');

Route::get('admin/search/for', 'AdminController@search')->middleware('admin');

Route::get('property/{id}/show/admin', 'PropertyController@showAdmin')->middleware('admin');

Route::get('property/update/{id}', 'AdminController@update')->middleware('admin');

Route::group(['middleware' => 'admin'], function() {
    Route::resource('property', 'PropertyController');
});

Route::get('property/delete/{id}', 'AdminController@delete')->middleware('admin');

Route::get('view/reservations', 'ReservationController@show')->middleware('admin');

Route::get('delete/reservation/{id}', 'ReservationController@delete')->middleware('admin');

Route::get('user/dashboard', 'UserController@dashboard')->middleware('user');

Route::get('user/search', function() {
    return view('user.search');
})->middleware('user');

Route::get('user/search/loc', 'UserController@search')->middleware('user');

Route::get('user/search/for', 'UserController@searchFor')->middleware('user');

Route::get('property/{id}/show/user', 'PropertyController@showUser')->middleware('user');

Route::get('proceed/reserve/{id}', 'UserController@reserve')->middleware('user');

Route::post('submit/form/{id}', 'ReservationController@submit')->middleware('user');

Route::group(['middleware' => 'user'], function() {
    Route::resource('user/reserved/property', 'UserController');
});