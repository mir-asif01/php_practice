<?php
$heading = "Create Post";

require "Database.php";
require 'Validator.php';

// die_and_dump($_SERVER);

$config = require('config.php');
$db_user = $config['user']['username'];
$db_password = $config['user']['password'];

$db = new Database($config['database'],$db_user,$db_password);
$errors = [];

if($_SERVER['REQUEST_METHOD'] === "POST"){

  // echo strlen($_POST['body']);
  // die_and_dump(Validator::string($_POST['body']));

  if(!Validator::string($_POST['title'],10,100)){
    $errors['title'] = "Title length more than 10 and less than 100 ";
  }

  if(!Validator::string($_POST['body'],100,1000)){
    $errors['body'] = "Body length more than 100 and less than 1000 ";
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