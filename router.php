<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// die_and_dump($uri);

/* ---------second version of the router------------- */

$routes = [
  "/" => "controllers/index.php",
  "/about" => "controllers/about.php",
  "/posts" => "controllers/posts.php",
];

function abort($code = 404){
  require "controllers/404-not-found.php";
  die();
}

function route_to_controllers($uri,$routes){
  if(array_key_exists($uri,$routes)){
    require $routes[$uri];
  }else{
    abort();
  }
}

route_to_controllers($uri,$routes);

/* 
 ----------- first version of router ----------------
if($uri === '/'){
  require "controllers/index.php";
}elseif($uri === '/about'){
  require "controllers/about.php";
}elseif($uri === '/books'){
  require "controllers/books.php";
}else{
  require "controllers/404-not-found.php";
}
*/
