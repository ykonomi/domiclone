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

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('logout', 'Auth\LoginController@logout');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/debug', function () {
    return view('debug');
})->middleware('auth');

Route::get('/entry', function () {
    return view('entry');
})->middleware('auth');

Route::get('/main', function () {
    return view('main');
})->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/games', 'GameController@create');
    Route::post('/users', 'UserController@create');
    Route::get('/turns/player', 'TurnController@show');
    Route::put('/turns', 'TurnController@edit');
});

Auth::routes();
