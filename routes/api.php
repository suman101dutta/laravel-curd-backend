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
Route::get('/getData', 'ApiController@index');
Route::post('saveData', 'ApiController@store');
Route::get('getDataById/{id}', 'ApiController@show');
Route::put('editData/{id}', 'ApiController@update');
Route::delete('delData/{id}', 'ApiController@destroy');

