<?php

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function urlIs($value)
{
  return $_SERVER['REQUEST_URI'] === $value;
}

function abort($status, $msg)
{
  // $status = $status;
  // $msg = $msg;
  require base_path("views/404.php");
  die();
}

function authorize($condition)
{
  if (!$condition) {
    abort(403, "Forbidden Access");
  }
}

function base_path($path)
{
  return BASE_PATH . $path;
}

function view($path, $attribute = [])
{
  extract($attribute);
  require base_path('views/' . $path);
}

function redirect($path)
{
  header("location: {$path}");
  exit();
}

function old()
{
  return core\Session::get('old');
}
