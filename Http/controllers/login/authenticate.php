<?php

use Http\Forms\LoginForm;
use Core\Authenticator;
// $db = App::getContainer()->resolve('Core\Database');

$form = new LoginForm();

if (!$form->validate($_POST['email'], $_POST['password'])) {
  return view("auth/login.view.php", [
    'errors' => $form->getErrors(),
    'heading' => 'Login'
  ]);
}

$auth = new Authenticator();

if ($auth->attempt($_POST['email'], $_POST['password'])) {
  header('location: /notes');
  exit();
} else {

  $_SESSION['__flash']['errors'] = $auth->getError();
  return redirect("/login");

  // header('location: /login');
  // exit();
  // return view("auth/login.view.php", [
  //   'errors' => $auth->getError(),
  //   'heading' => 'Login'
  // ]);
}

