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

$router = app('router');

$router->get('/', ['as' => 'rota.staff', 'uses' => 'RotaSlotStaffController@index']);

$router->group(['prefix' => 'api'], function ($router) {
    $router->get('rota/staff/by-day', ['as' => 'api.rota.staff.by.day', 'uses' => 'RotaSlotStaffController@getStaffDataByDay']);
});
