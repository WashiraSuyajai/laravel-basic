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

//sending paramater to server thhen keep it in 'name' variable
//response function 'showHello' in 'HelloController'
Route::get('showname/{name}', 'HelloController@showHello');

Route::get('showproduct/{product}', 'HelloController@resultProduct');

//response 'users' view
Route::get('/show', function () {
    return view('users');
});

//response 'product' view in folder 'create'
Route::get('/product', 'HelloController@show');

//response 'home' blade template
Route::get('/home', function () {
    return view('home');
});

//response 'edit' blade template
Route::get('/edit', 'HelloController@edit');