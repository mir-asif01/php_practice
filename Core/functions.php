<?php

use Core\Response;
use Core\Database;

function die_and_dump($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die();
};

function urlIs($value)
{
  return $_SERVER['REQUEST_URI'] === $value;
};

function authorize($condition, $status = Response::FORBIDDEN)
{
  if ($condition) {
    Database::abort($status);
  }
}

function base_path($path)
{
  return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
  extract($attributes);
  require base_path("views/" . $path);
}

function redirect()
{
  header('location: /posts');
  exit();
}

// die_and_dump($_SERVER['REQUEST_URI']);