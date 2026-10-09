<?php

namespace Core;

class Router
{
  protected $routes = [];

  public function add($method, $uri, $controller)
  {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => $method
    ];
  }

  public function get($uri, $controller)
  {
    $this->add("GET", $uri, $controller);
  }

  public function post($uri, $controller)
  {
    $this->add("POST", $uri, $controller);
  }

  public function delete($uri, $controller)
  {
    $this->add("DELETE", $uri, $controller);
  }

  public function patch($uri, $controller)
  {
    $this->add("PATCH", $uri, $controller);
  }

  public function put($uri, $controller)
  {
    $this->add("PUT", $uri, $controller);
  }

  protected function abort($code = 404)
  {
    require base_path("controllers/{$code}.php");
    die();
  }

  public function redirect()
  {
    header('location: /posts');
    exit();
  }

  public function route($uri, $method)
  {
    foreach ($this->routes as $route) {
      if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
        return require base_path($route['controller']);
      }
    }
    $this->abort();
  }
}
// die_and_dump($uri);




/* ---------second version of the router------------- */
/*
$routes = require base_path("routes.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// die_and_dump($uri);

function abort($code = 404){
  require base_path("controllers/{$code}.php");
  die();
}

function route_to_controllers($uri,$routes){
  if(array_key_exists($uri,$routes)){
    require base_path($routes[$uri]);
  }else{
    abort();
  }
}

route_to_controllers($uri,$routes);
*/

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
