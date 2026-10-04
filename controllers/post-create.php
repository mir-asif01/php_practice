<?php
$heading = "Create Post";

require "Database.php";

// die_and_dump($_SERVER);

$config = require('config.php');
$db_user = $config['user']['username'];
$db_password = $config['user']['password'];

$db = new Database($config['database'],$db_user,$db_password);
$errors = [];

if($_SERVER['REQUEST_METHOD'] === "POST"){
  if(strlen($_POST['title']) === 0){
    $errors['title'] = "title can not be empty";
  }
  if(strlen($_POST['title']) > 100){
    $errors['title'] = "title can not be more than 100 characters";
  }
  if(strlen($_POST['body']) === 0){
    $errors['body'] = "body can not be empty";
  }
  if(strlen($_POST['body']) > 1000){
    $errors['body'] = "body can not be more than 500 characters";
  }

  if(empty($errors)){
    $db->query('insert into posts(title,body,user_id) values(:title,:body,:user_id)',[
      'title' => $_POST['title'],
      'body' => $_POST['body'],
      'user_id' => 2,
    ]);
  }
}
    



require "views/post-create.view.php";