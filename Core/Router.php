<?php

namespace Core;

use Core\Middleware\Auth;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;

class Router
{
  protected $routes = [];

  public function add($uri, $method, $controller)
  {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => $method,
      'middleware' => null
    ];

    return $this;
  }

  public function get($uri, $controller)
  {
    return $this->add($uri, "GET", $controller);
  }

  public function post($uri, $controller)
  {
    return $this->add($uri, "POST", $controller);
  }

  public function delete($uri, $controller)
  {
    return $this->add($uri, "DELETE", $controller);
  }

  public function patch($uri, $controller)
  {
    return $this->add($uri, "PATCH", $controller);
  }
  public function put($uri, $controller)
  {
    return $this->add($uri, "PUT", $controller);
  }


  public function middleware($key)
  {
    $this->routes[array_key_last($this->routes)]['middleware'] = $key;
  }

  public function route($uri, $method)
  {
    foreach ($this->routes as $route) {
      if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
        Middleware::resolve($route['middleware']);



        // if ($route['middleware']) {
        //   $middleware = Middleware::MAP[$route['middleware']];
        //   (new $middleware())->handle();
        // }


        // if ($route['middleware'] === 'guest') {
        //   (new Auth())->handle();
        // }
        // if ($route['middleware'] === 'auth') {
        //   (new Guest())->handle();
        // }
        require base_path("Http/controllers" . $route['controller']);
      }
    }
  }

}
;


// $routes = require(base_path('routes.php'));

// // dd($uri);

// $routes = [
//   "/" => "controllers/index.php",
//   "/about" => "controllers/about.php",
//   "/notes" => "controllers/notes/show.php",
//   "/notes/create" => "controllers/notes/create.php",
//   "/note" => "controllers/notes/note.php",
//   "/contact" => "controllers/contact.php"
// ];

// function routeToController($uri, $routes)
// {
//   if (array_key_exists($uri, $routes)) {
//     require base_path($routes[$uri]);
//   } else {
//     view('404.php');
//     die();
//   }
// }

// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// routeToController($uri, $routes);
