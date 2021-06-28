<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/workers', 'WorkerController@index');
$router->get('/workers/{uuid}', 'WorkerController@show');
$router->post('/workers', 'WorkerController@store');
$router->delete('/workers/{uuid}', 'WorkerController@destroy');
$router->get('salary_details', 'WorkerController@salary');
