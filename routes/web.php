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

Route::get('/index', 'SiteController@index');

Route::get('/blog', function () {
    return view('site.blog');
});

Route::get('/about', function () {
    return view('site.about');
});

Route::get('/contact', function () {
    return view('site.contact');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
