<?php

class Validator
{
  public function string($value, $min, $max)
  {
    $value = trim($value);
    return strlen($value) > $min && strlen($value) <= $max;
  }
  public function email($value)
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }
}
