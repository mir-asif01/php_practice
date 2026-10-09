<?php

// return [
//   "/" => "controllers/index.php",
//   "/about" => "controllers/about.php",
//   // post routes
//   "/posts" => "controllers/posts/index.php",
//   "/post" => "controllers/posts/show.php",
//   "/post/create" => "controllers/posts/create.php"
// ];

$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/index.php");

$router->get("/posts", "controllers/posts/index.php");

$router->get("/post", "controllers/posts/show.php");
$router->delete("/post", "controllers/posts/delete.php");

$router->get("/post/create", "controllers/posts/create.php");
$router->post("/post", "controllers/posts/store.php");
