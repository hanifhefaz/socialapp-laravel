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

Auth::routes();

Route::middleware('auth')->group(function() {
	Route::get('/posts', 'PostController@index')->name('home');
	Route::post('/posts', 'PostController@store');
	Route::post('/profiles/{user}/follow', 'FollowsController@store');
});

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');