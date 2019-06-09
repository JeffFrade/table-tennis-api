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

Auth::routes();

Route::group(['middleware' => ['auth:api']], function () {
    Route::group(['prefix' => 'player'], function () {
        Route::post('/store', 'PlayerController@store')->name('player.store');
        Route::get('/find/{id}', 'PlayerController@find')->name('player.find');
        Route::put('/update/{id}', 'PlayerController@update')->name('player.update');
    });
});
