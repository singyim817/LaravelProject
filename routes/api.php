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

// List country
Route::get('countries2',  'CountryController@index');

// List country
Route::get('countries',  'CountryController@index');

// Get Single Country
Route::get('country/{id}',  'CountryController@show');

// Create new Country
Route::post('country',  'CountryController@store');

// Update Country
Route::put('country/',  'CountryController@edit');

// Delete Country
Route::delete('country/',  'CountryController@destory');