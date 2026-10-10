<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$current_user_id = 2;

$post = $db->query("select * from posts where id=:id", [
  'id' => $_GET['id']
])->findOrFail();

authorize($post['user_id'] !== $current_user_id);

view("posts/show.view.php", [
  'heading' => "Viewing Single Post",
  'post' => $post
]);
