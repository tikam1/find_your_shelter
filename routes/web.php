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

// Routes to redirects to admin's dashboard through controller...
Route::get('admin/index', 'OwnerController@index');

// Route to redirects to the page to add property...
Route::get('property/add', 'OwnerController@add');

// Route to redirect to the admin dashboard with added result after adding the property...
Route::post('property/store', 'PropertyController@store');

Route::get('/property/{id}/show', 'PropertyController@show');

// Route to redirect to the admin's dashboard after updating the property...
Route::get('/property/{id}/update', 'OwnerController@update');

// Route to redirect to the admin's dashboard after removing the property...
Route::get('/property/{id}/delete', 'PropertyController@remove');

// Routes to redirects to admin's dashboard through controller...
Route::get('user/index', 'UserController@index');