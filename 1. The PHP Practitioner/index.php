<?php

$database = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';

var_dump($_SERVER);

$uri = trim($_SERVER['REQUEST_URI'], '/php-learning/');

require $router->direct($uri);

