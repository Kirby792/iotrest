<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('users','UsersController@index');
$router->get('users/{id}','UsersController@show');
$router->post('users','UsersController@store');
$router->put('users/{id}','UsersController@update');
$router->delete('users/{id}','UsersController@delete');

$router->get('sensors','SensorsController@index');
$router->get('sensors/{id}','SensorsController@show');
$router->post('sensors','SensorsController@store');
$router->put('sensors/{id}','SensorsController@update');
$router->delete('sensors/{id}','SensorsController@delete');

$router->get('actuators','ActuatorsController@index');
$router->get('actuators/{id}','ActuatorsController@show');
$router->post('actuators','ActuatorsController@store');
$router->put('actuators/{id}','ActuatorsController@update');
$router->delete('actuators/{id}','ActuatorsController@delete');