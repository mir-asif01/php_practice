<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$errors = [];

if (!Validator::string($_POST['title'], 10, 100)) {
  $errors['title'] = "Title length more than 10 and less than 100 ";
}

if (!Validator::string($_POST['body'], 100, 1000)) {
  $errors['body'] = "Body length more than 100 and less than 1000 ";
}

if (empty($errors)) {
  $db->query('insert into posts(title,body,user_id) values(:title,:body,:user_id)', [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'user_id' => 2,
  ]);
  redirect();
} else {
  view("posts/create.view.php", [
    'heading' => "Create Post",
    'errors' => $errors
  ]);
}
