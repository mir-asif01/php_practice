<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$user_id = 2;
$query = "select * from posts where user_id=:id";

$posts = $db->query($query, ['id' => $user_id])->listOrFail();

view("posts/index.view.php", [
  'heading' => "Your Posts",
  'posts' => $posts
]);
