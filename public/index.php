<?php

use Router\Router;

require "../vendor/autoload.php";

$router = new Router($_GET['url']);

$router->get('/', 'testController@index');
$router->get('/posts/:id', 'testController@show');
$router->run();