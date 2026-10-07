<?php

use Core\Database;

$config = require(base_path("config.php"));
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

view("posts/show.view.php",[
  'heading' => "Viewing Single Post",
  'post' => $post
]);