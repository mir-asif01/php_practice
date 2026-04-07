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
  require "views/404.php";
  die();
}

function authorize($condition)
{
  if (! $condition) {
    abort(403, "Forbidden Access");
  }
}
