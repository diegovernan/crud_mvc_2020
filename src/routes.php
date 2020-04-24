<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/create', 'HomeController@create');
$router->post('/store', 'HomeController@store');

$router->get('/about', 'HomeController@about');
$router->get('/user/{id}', 'HomeController@edit');
