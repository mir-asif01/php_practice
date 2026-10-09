<?php

use Core\Database;

$config = require(base_path("config.php"));
$db_user = $config['user']['username'];
$db_password = $config['user']['password'];

$db = new Database($config['database'], $db_user, $db_password);
$current_user_id = 2;

$post = $db->query("select * from posts where id=:id", [
  'id' => $_POST['id']
])->findOrFail();

authorize($post['user_id'] !== $current_user_id);

$result = $db->query("delete from posts where id=:id", ['id' => $_POST['id']]);

redirect();
