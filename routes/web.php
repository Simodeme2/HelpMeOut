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

Auth::routes();
Route::post('auth/register', 'RegisterController@create');

// Route::get('/users', 'UserController@index');
// Route::get('/users/create', 'UserController@create');
// Route::post('/users/create', 'UserController@store');

Route::resource('users', 'UserController', ['names' => [
    'update' => 'users.update'
]]);

Route::get('/home', 'DashboardController@getIndex')->name('home');
