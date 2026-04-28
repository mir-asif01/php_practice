<?php

// return [
//   "/" => "controllers/index.php",
//   "/about" => "controllers/about.php",
//   "/notes" => "controllers/notes/show.php",
//   "/notes/create" => "controllers/notes/create.php",
//   "/note" => "controllers/notes/note.php",
//   "/contact" => "controllers/contact.php"
// ];


$router->get("/", "/index.php")->middleware('guest');
$router->get("/about", "/about.php")->middleware('guest');
$router->get("/contact", "/contact.php")->middleware('guest');

$router->get("/notes", "/notes/show.php")->middleware('auth');
$router->get("/notes/create", "/notes/create.php")->middleware('auth');
$router->post("/notes", "/notes/store.php")->middleware('auth');
$router->get("/note", "/notes/note.php")->middleware('auth');
$router->delete("/note", "/notes/destroy.php")->middleware('auth');
$router->get('/note/edit', "/notes/edit.php")->middleware('auth');
$router->patch("/note", "/notes/update.php")->middleware('auth');

$router->get("/register", "/register/register.php")->middleware('guest');
$router->post("/register", "/register/store.php")->middleware('guest');
$router->get("/login", "/login/login.php")->middleware('guest');
$router->post("/login", "/login/authenticate.php")->middleware('guest');

$router->delete("/logout", "/logout.php")->middleware('auth');

