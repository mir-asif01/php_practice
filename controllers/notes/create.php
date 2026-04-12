<?php

use Core\Database;
use Core\Validator;

$config = require(base_path('./config.php'));

require(base_path('Core/Validator.php'));;

$heading = "Create Note";

// connect to database
$db = new Database($config['database']);

$errors = [];
$validator = new Validator();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  if (!$validator->string($_POST['title'], 0, 30)) {
    $errors['title'] = "Title's length min 0 and max 30";
  }

  // if (strlen($_POST['title']) > 30) {
  //   $errors['title'] = "Title length too long, max is 30";
  // }

  if (!$validator->string($_POST['body'], 0, 100)) {
    $errors['body'] = "Body's length min 0 and max 100";
  }

  // if (strlen($_POST['body']) > 100) {
  //   $errors['body'] = "Body length too long, max is 100";
  // }

  if (empty($errors)) {
    $db->query("insert into notes(title,body,user_id) values(:title, :body, :user_id);", [
      'title' => $_POST['title'],
      'body' => $_POST['body'],
      'user_id' => 2
    ]);
  }
}


// require("./views/notes/create-note.view.php");
view('notes/create-note.view.php', [
  'errors' => $errors
]);
