<?php

use App\Http\Router;

$route = Router::getInstance();

$route->get('/home/{id}/{id}', 'HomeController@index');
$route->put('/home', 'HomeController@store');