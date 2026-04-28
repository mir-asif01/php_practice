<?php

namespace Core;

class Session
{
  public static function has($key)
  {
  }

  public static function put($key, $value)
  {
  }

  public static function get($key, $default = null)
  {
  }

  public static function flush()
  {
    $_SESSION = [];
  }

  public static function destroy()
  {
    static::flush();
    session_destroy();
  }

}