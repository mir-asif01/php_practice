<?php

use Http\Forms\LoginForm;
use Core\Authenticator;
use Core\Session;

$form = new LoginForm();

if (!$form->validate($_POST['email'], $_POST['password'])) {
  return view("auth/login.view.php", [
    'errors' => $form->getErrors(),
    'heading' => 'Login'
  ]);
}

$auth = new Authenticator();

if ($auth->attempt($_POST['email'], $_POST['password'])) {
  if (isset($_SESSION["user"])) {
    return redirect('/notes');
  }
} else {
  /*
  -----Understanding the flash and unflash function from Session Object-----
    1.this stores data 
      flash function -> $_SESSION['__flash'][$key] = $value;
    2.this removes data from session
      unflash function -> unset($_SESSION['__flash']);

    ----- Purpose -----
    To store authentication related eerors and user inputs in sessions and removes them after a short period of time *logically after reloading the application*

  */

  Session::flash('errors', $auth->getError()); // Passing email and password errors to show after failed attempt.
  Session::flash('old', $_POST['email']); // Passing the old email input to show after failed attempt.
  return redirect("/login");
}

