<?php

use Core\App;
use Core\Validator;

require(base_path('Core/Validator.php'));


// connect to database
$db = App::getContainer()->resolve('Core\Database');

$errors = [];
$validator = new Validator();


if (!$validator->string($_POST['title'], 0, 30)) {
  $errors['title'] = "Title's length min 0 and max 30";
}

if (!$validator->string($_POST['body'], 0, 100)) {
  $errors['body'] = "Body's length min 0 and max 100";
}

if (!empty($errors)) {
  return view('notes/create-note.view.php', [
    'errors' => $errors,
    'heading' => 'Create Note'
  ]);
}

$db->query("insert into notes(title,body,user_id) values(:title, :body, :user_id);", [
  'title' => $_POST['title'],
  'body' => $_POST['body'],
  'user_id' => 2
]);

header('location: /notes');
exit();