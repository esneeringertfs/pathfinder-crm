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

/**
 * Developer API Routes
 */
Route::get('developers', 'DeveloperController@index');
Route::post('developers', 'DeveloperController@create');
Route::put('developers', 'DeveloperController@update');
Route::delete('developers/{devRef}', 'DeveloperController@delete');
Route::get('developers/{devRef}', 'DeveloperController@getByDevRef');
