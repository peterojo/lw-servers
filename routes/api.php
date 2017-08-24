<?php

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

Route::post('/filter', ['as' => 'servers.filter', 'uses' => 'API\ServersController@index']);

Route::get('/locations', ['as' => 'locations.index', 'uses' => 'API\LocationsController@index']);