<?php

use Core\Database;

$config = require(base_path('./config.php'));


// connect to database
$db = new Database($config['database']);
// $user_id = $_GET['user_id'];
$query = "select * from notes where id=:id;";
$note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === 2);

$db->query('delete from notes where id = :id', [
  'id' => $_POST['id']
]);

header('location:/notes');
exit;