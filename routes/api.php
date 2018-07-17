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
 * Transaction API Routes
 */
Route::get('transaction', 'TransactionController@index');
Route::post('transaction/create', 'TransactionController@create');


/**
 * Developer API Routes
 */
Route::get('developer', 'DeveloperController@index');
Route::post('developer', 'DeveloperController@create');