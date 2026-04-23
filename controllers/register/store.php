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
  return view("auth/register.view.php", [
    'errors' => $errors,
    'heading' => 'Register'
  ]);
}

// search in the database, if user exists
$user = $db->query("select * from users where email=:email", [
  'email' => $_POST['email']
])->findSingle();

if ($user['email']) {
  return view("auth/login.view.php", [
    'heading' => "User already exists with same email!",
    'errors' => []
  ]);
} else {
  $db->query("insert into users(email,password,username) values(:email, :password, :username);", [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'username' => $username,
  ]);

  $_SESSION['user'] = [
    'email' => $_POST['email']
  ];

  header("location: /notes");
  exit();
}

