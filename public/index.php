<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

// require base_path("Core/Database.php");
spl_autoload_register(function ($class) {
  $new_class = str_replace('\\', '/', $class);
  require base_path($new_class . '.php');
});

$router = new \Core\Router();

$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['__method'] ?? $_SERVER['REQUEST_METHOD'];

// dd($_SERVER["REQUEST_METHOD"]);

$router->route($uri,$method);

