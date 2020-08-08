<?php

use Illuminate\Support\Facades\Route;

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

Route::get('users', function () {
    return '<h1>user! 555</h1>';
});

Route::get('showname', function () {
    return '<h1>Hello Laravel</h1>';
});

//sending paramater in 'name' variable
Route::get('showname/{name}', 'HelloController@showHello');

Route::get('showproduct/{product}', 'HelloController@resultProduct');