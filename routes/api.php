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

Route::get('/articles', 'API\ArticleController@index');
Route::get('/articles/{article}', 'API\ArticleController@show');
Route::post('/articles', 'API\ArticleController@store');
Route::put('/articles/{article}', 'API\ArticleController@update');
Route::delete('/articles/{article}', 'API\ArticleController@delete');

Route::post('login', 'API\UserController@login');

Route::post('details', 'API\UserController@details')->middleware('auth:api');
