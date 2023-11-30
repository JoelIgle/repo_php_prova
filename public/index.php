<?php

use Framework\App;

require '../vendor/autoload.php';

require '../framework/bootstrap.php';

$routes = require '../routes.php';

//$routes = new Router();
//$routes->define($routes);
//$routes->redirect($_SERVER['REQUEST_URI']);


// facades
App::get('router')->redirect($_SERVER['REQUEST_URI']);

//require 'routes.php';

//require 'app/index.php';
//
//require 'resources/views/index.blade.php';

