<?php

$heading = "Viewing Single Post";

require "Database.php";

$config = require('config.php');
$db_user = $config['user']['username'];
$db_password = $config['user']['password'];

$db = new Database($config['database'],$db_user,$db_password);

$id = $_GET['id'];
$query = "select * from posts where id=:id";

$post = $db->query($query,[
  'id' => $id
  ])->findOrFail();

$current_user_id = 2;

authorize($post['user_id'] !== $current_user_id);

require "views/post.view.php";