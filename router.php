<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);

$routes = [
  "/" => "controllers/index.php",
  "/about" => "controllers/about.php",
  "/notes" => "controllers/notes.php",
  "/note" => "controllers/note.php",
  "/contact" => "controllers/contact.php"
];

function routeToController($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    require "views/404.php";
    die();
  }
}

routeToController($uri, $routes);
