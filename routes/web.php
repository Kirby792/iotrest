<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('user', 'ExampleController@index');
$router->get('user/{id}', 'ExampleController@show');