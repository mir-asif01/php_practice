<?php

use Core\Database;
use Core\Validator;

$config = require(base_path("config.php"));
$db_user = $config['user']['username'];
$db_password = $config['user']['password'];

$db = new Database($config['database'], $db_user, $db_password);
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
