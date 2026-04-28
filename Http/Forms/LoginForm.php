<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
  protected $errors = [];
  public function validate($email, $password)
  {
    $validator = new Validator();


    if (!$validator->email($email)) {
      $this->errors['email'] = "Enter a valid email!!";
    }

    if (!$validator->string($password, 4, 16)) {
      $this->errors['password'] = "Password length min 4 and max 16";
    }

    return empty($this->errors);
  }
  public function getErrors()
  {
    return $this->errors;
  }
}