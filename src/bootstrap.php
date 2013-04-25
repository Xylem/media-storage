<?php

// load config

$CONFIG = require_once('../config/config.php');

require_once($CONFIG['paths']['vendor'] . 'autoload.php');

// enable autoloader

require_once('autoload.php');

$test = new \Service\GenreService();
echo $test->getEntityName();

$app = new \Slim\Slim();

$routes = require_once('./routes.php');

$routes($app);

$app->run();