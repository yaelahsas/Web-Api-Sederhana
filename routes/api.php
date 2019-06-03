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
Route::get('pengguna', 'PenggunaController@index');
Route::get('pengguna/{id}', 'PenggunaController@getId');
Route::post('pengguna', 'PenggunaController@create');
Route::put('pengguna/{id}', 'PenggunaController@update');
Route::delete('pengguna/{id}', 'PenggunaController@delete');
