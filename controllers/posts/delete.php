<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$current_user_id = 2;

$post = $db->query("select * from posts where id=:id", [
  'id' => $_POST['id']
])->findOrFail();

authorize($post['user_id'] !== $current_user_id);

$result = $db->query("delete from posts where id=:id", ['id' => $_POST['id']]);

redirect();
