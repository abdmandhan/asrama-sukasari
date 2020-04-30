<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->group(function () {
    Route::prefix('view')->name('view.')->group(function () {
        Route::post('blog', 'ViewController@blog')->name('blog');
        Route::post('goal', 'ViewController@goal')->name('goal');
        Route::post('impression', 'ViewController@impression')->name('impression');
        Route::post('team', 'ViewController@team')->name('team');
        Route::post('activity', 'ViewController@activity')->name('activity');
    });
});
