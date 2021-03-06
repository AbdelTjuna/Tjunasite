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

Route::get('/terms', function () {
    return view('pages/terms');
});

Route::get('/overview', function () {
    return view('pages/overview');
});


Route::get('/cases', function () {
    return view('pages/cases');
});



