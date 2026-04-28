<?php

namespace Core;

use Core\App;
class Authenticator
{
  // private $db = App::getContainer()->resolve('Core\Database');
  protected $errors = [];
  public function attempt($email, $password)
  {
    $db = App::getContainer()->resolve('Core\Database');
    $user = $db->query("select * from users where email=:email", [
      'email' => $email
    ])->findSingle();

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
          'email' => $_POST['email']
        ];
        return true;
      }
      $this->setError('password', 'Password is incorrect');
      return false;
    }
  }

  protected function setError($key, $value)
  {
    $this->errors[$key] = $value;
  }

  public function getError()
  {
    return $this->errors;
  }
}