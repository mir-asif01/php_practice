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
    return $_SESSION['__flash'][$key] ?? $_SESSION[$key] ?? $default;
  }

  public static function flash($key, $value)
  {
    $_SESSION['__flash'][$key] = $value;
  }

  public static function unflash()
  {
    unset($_SESSION['__flash']);
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