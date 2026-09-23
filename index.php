<?php
require "functions.php";
// require "router.php";
require "Database.php";

$config = require('config.php');
$db_user = $config['user']['username'];
$db_password = $config['user']['password'];

$db = new Database($config['database'],$db_user,$db_password);
$posts = $db->query("select * from posts")->fetchAll();

foreach ($posts as $post) {
  echo "<li>" . $post['title'] . "</li>";
}
