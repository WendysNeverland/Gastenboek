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

Route::get('invoeren', function () {
    return view('invoeren');
});

Route::get('aanpassen', function () {
    return view('aanpassen');
});

Route::get('resultaat', function () {
    return view('resultaat');
});
