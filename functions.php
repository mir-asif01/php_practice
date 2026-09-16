<?php

function die_and_dump($value){
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die();
};

function urlIs($value){
  return $_SERVER['REQUEST_URI']=== $value;
};

// die_and_dump($_SERVER['REQUEST_URI']);