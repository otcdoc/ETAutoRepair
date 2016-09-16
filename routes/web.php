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
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/news', 'NewsController@getNews' );

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/privacypolicy', function() {
	return view('privacypolicy');
});

Route::get('/test', function() {
	return view('test');
});