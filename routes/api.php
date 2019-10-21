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

Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::post('logout', 'Auth\AuthController@logout');
    Route::post('refresh', 'Auth\AuthController@refresh');
    Route::post('me', 'Auth\AuthController@me');
    Route::post('register', 'Auth\RegisterController@create');
});

Route::group([
    'middleware' => 'auth:api',
], function ($router) {
    Route::apiResource('movies', 'Api\MovieController');
    Route::get('genres', 'Api\GenresController@index');
    Route::post('movies/{id}/reactions', 'Api\ReactionsController@store');
    Route::post('movies/{id}/comments', 'Api\CommentController@store');
    Route::get('movies/{id}/comments', 'Api\CommentController@index');
});

Route::post('login', 'Auth\AuthController@login');
