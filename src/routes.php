<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/about', 'HomeController@about');
$router->get('/user/{id}', 'HomeController@edit');