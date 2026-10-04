<?php 
  $heading = "My Posts";
  
  require "Database.php";

  $config = require('config.php');
  $db_user = $config['user']['username'];
  $db_password = $config['user']['password'];

  $db = new Database($config['database'],$db_user,$db_password);

  $user_id = 2;
  $query = "select * from posts where user_id=:id";

  $posts = $db->query($query,['id' => $user_id])->listOrFail();

  require "views/posts.view.php";

