<?php

use Core\Database;

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

// require base_path("Core/Database.php");
spl_autoload_register(function ($class) {
  $new_class = str_replace('\\', '/', $class);
  require base_path($new_class . '.php');
});

require base_path("Core/router.php");
