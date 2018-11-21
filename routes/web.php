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
    if ( Auth::check() ) {
        return view('home');
    } else {
        return view('auth.login');
    }
});

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::get('/home', function() {
        return redirect('/');
    });
    
    Route::get('/', 'HomeController@index')->name('main');
    Route::post('/update', 'HomeController@update')->name('main_update');

    Route::post('/create', 'HomeController@create')->name('main_create');

    Route::get('/server', 'HomeController@server')->name('server');

    Route::get('/sklad', 'HomeController@sklad')->name('sklad');

    Route::get('/spisania', 'HomeController@spisania')->name('spisania');

    Route::get('/utilizatsia', 'HomeController@utilizatsia')->name('utilizatsia');

    Route::post('/delete', 'HomeController@delete')->name('delete');

    Route::get('/users', 'MainController@users')->name('users');
});

