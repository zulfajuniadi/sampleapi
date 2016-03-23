<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('docs.api');
    });

});

Route::group([
    'middleware' => ['api'],
    'namespace' => 'Api\V1',
    'prefix' => '/api/v1',
], function ($route) {
    $route->controller('/auth', 'AuthController');
    Route::group([
        'middleware' => ['api:auth'],
    ], function ($route) {
        $route->resource('/tasks', 'TasksController');
        $route->resource('/users', 'UsersController');
    });
});
