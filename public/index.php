<?php

const BASE_PATH = __DIR__ . "/../";
// var_dump(BASE_PATH);

require BASE_PATH . "functions.php";

spl_autoload_register(function ($class){
  require base_path("Core/{$class}.php");
});
require base_path("router.php");


/*
foreach ($posts as $post) {
  echo "<li>" . $post['title'] . "</li>";
}*/

