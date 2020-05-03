<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/create', 'HomeController@create');
$router->post('/store', 'HomeController@store');

$router->get('/edit/{id}', 'HomeController@edit');
$router->post('/update/{id}', 'HomeController@update');

$router->get('/delete/{id}', 'HomeController@delete');
