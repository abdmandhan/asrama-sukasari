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


Route::get('/', 'PageController@index')->name('/');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/about', 'PageController@about')->name('about');

Route::get('/blogs', 'PageController@blogs')->name('blogs');
Route::get('/blog', 'PageController@blog')->name('blog');

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('blog', 'BlogController');
    Route::resource('activity', 'ActivityController');
    Route::resource('goal', 'GoalController');
    Route::resource('impression', 'ImpressionController');
    Route::resource('team', 'TeamController');
});

Auth::routes();
