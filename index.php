<?php

require "functions.php";
// require "router.php";
require "Database.php";

$db = new Database();
$post = $db->query("select * from posts where id>1")->fetch(PDO::FETCH_ASSOC);

die_and_dump($post);

foreach ($posts as $post) {
  echo "<li>" . $post['title'] . "</li>";
}
