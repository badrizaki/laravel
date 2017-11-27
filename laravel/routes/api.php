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


/*
// SAMPLE :
Route::middleware('auth.basic:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/user', ['uses' => 'Api\UserController@index', 'middleware' => 'APIAuthentication']);