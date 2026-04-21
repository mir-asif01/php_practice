<?php

use Core\App;

// connect to database
$db = App::getContainer()->resolve('Core\Database');
// $user_id = $_GET['user_id'];
$query = "select * from notes where id=:id;";
$note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === 2);

$db->query('delete from notes where id = :id', [
  'id' => $_POST['id']
]);

header('location:/notes');
exit;
