<?php

namespace Core;

class Session
{
  // To retrieve information from session
  public static function get($key, $default = null)
  {
    return $_SESSION['__flash'][$key] ?? $_SESSION[$key] ?? $default;
  }

  // To save information in the session
  public static function flash($key, $value)
  {
    $_SESSION['__flash'][$key] = $value;
  }

  // TO clear the session starting with __flash prefix
  public static function unflash()
  {
    unset($_SESSION['__flash']['old']);
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