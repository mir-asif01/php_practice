<?php

require "functions.php";

require "router.php";

require "Database.php";

$config = require('config.php');

// connect to database
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = ?";

// dd("select * from posts where id = {$id}");

$posts = $db->query($query, [$id]);

foreach ($posts as $post) {
  echo "<h1 class='text-4xl text-white text-center'>" . $post['title'] . "</h1>";
}
