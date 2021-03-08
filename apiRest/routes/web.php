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


$router->group(['prefix' => 'api'], function ($router) {
    $router->get('client', 'ClientController@listAll');
    $router->get('client/{id}', 'ClientController@listClient');
    $router->post('client', 'ClientController@create');
    $router->put('client/{id}', 'ClientController@update');
    $router->delete('client/{id}', 'ClientController@delete');

    $router->get('commande', 'CommandeController@listAll');
    $router->get('commande/{id}', 'CommandeController@listCommande');
    $router->post('commande', 'CommandeController@create');
    $router->put('commande/{id}', 'CommandeController@update');
    $router->delete('commande/{id}', 'CommandeController@delete');
});
