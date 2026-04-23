<?php

use Core\App;
use Core\Validator;

$db = App::getContainer()->resolve('Core\Database');

$errors = [];
$validator = new Validator();


if (!$validator->email($_POST['email'])) {
  $errors['email'] = "Enter a valid email!!";
}

if (!$validator->string($_POST['password'], 4, 16)) {
  $errors['password'] = "Password length min 4 and max 16";
}

$username = "Johh Snow";

if (!empty($errors)) {
  return view("auth/login.view.php", [
    'errors' => $errors,
    'heading' => 'Login'
  ]);
}

// search in the database, if user exists
$user = $db->query("select * from users where email=:email", [
  'email' => $_POST['email']
])->findSingle();

if (!$user) {
  return view("auth/register.view.php", [
    'heading' => "Register",
    'errors' => [
      'email' => "Email is not registered, Regirster first!"
    ]
  ]);
} else {

  $passoword_match = password_verify($_POST['password'], $user['password']);
  if (!$passoword_match) {
    return view("auth/login.view.php", [
      'heading' => "Login",
      'errors' => [
        'email' => "Password is incorrect"
      ]
    ]);
  }

  $_SESSION['user'] = [
    'email' => $_POST['email']
  ];

  header("location: /notes");
  exit();
}

