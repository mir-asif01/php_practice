<?php

namespace Core;

class Container
{
  protected $bindings = [];

  /* This method is used to store the resolver function with it's key */
  public function bind($key, $resolver)
  {
    $this->bindings[$key] = $resolver;
  }

  /* This method will resolve/run/execute the binded function to the $key */
  public function resolve($key)
  {
    if (!array_key_exists($key, $this->bindings)) {
      throw new \Exception("Can not find resolver for {$key}");
    }
    $resolver = $this->bindings[$key];
    return call_user_func($resolver);
  }
}
