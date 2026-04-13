<?php

namespace Core;

class Router {
protected $routes = [];

public function get($uri, $controller){
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => 'GET'
    ];
  }

  public function post($uri, $controller){
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => 'POST'
    ];
  }

  public function delete($uri, $controller){
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => 'DELETE'
    ];
  }

  public function patch($uri, $controller){
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => 'PATCH'
    ];
  }


  public function put($uri, $controller){
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => 'PUT'
    ];
  }

  public function route($uri,$method){

  //  var_dump($method);

    foreach($this->routes as $route){
      if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
        // return require base_path($route['controller']);
        require base_path($route['controller']);
        // var_dump($route['controller']);
      }
    }
    // view('404.php',[
    //   'status' => 404,
    //   'msg' => 'Page not found'
    // ]);
    // die();
  }

};


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
