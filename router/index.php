<?php

//$database = require "core/bootstrap.php";

require "core/bootstrap.php";

/*$routes = [
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php' 
];*/ // I can do it here.

$router = new Router;

require 'routes.php';

//var_dump($_SERVER);

//var_dump($_SERVER['REQUEST_URI']);

//$uri = trim($_SERVER['REQUEST_URI'], '/'); // trim remove something. 

//require $router->direct($uri);

/*
$router = Router::load('routes.php');

require $router->direct($uri);
*/

/*
require Router::load('routes.php')
    ->direct($uri);
*/

require Router::load('routes.php')
    ->direct(Request::uri());
