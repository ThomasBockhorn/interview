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

//Auth routes
Auth::routes();

//home page for login user
Route::get('/home', 'HomeController@index')->name('home');

//about page
Route::get('/contact', 'ContactUsController@index')->name('contact');