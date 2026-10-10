<?php

use Core\App;
use Core\Container;
use Core\Database;

// Creating new container object
$container = new Container();

/* Calling/Invoking the bind method to store the key and resolver function in $bindings variable */
$container->bind('Core\Database', function () {
  $config = require(base_path("config.php"));
  $db_user = $config['user']['username'];
  $db_password = $config['user']['password'];

  return new Database($config['database'], $db_user, $db_password);
});


/*
App::bind('Core\Database', function () {
  $config = require(base_path("config.php"));
  $db_user = $config['user']['username'];
  $db_password = $config['user']['password'];

  return new Database($config['database'], $db_user, $db_password);
});
*/


/* Storing the entire $container into the $container variable of App class . When calling the $container from App class it will have bind and resolve method with itself*/
App::setContainer($container);
