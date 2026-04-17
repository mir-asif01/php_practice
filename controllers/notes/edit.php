<?php

use Core\App;

$db = App::getContainer()->resolve('Core\Database');
// $user_id = $_GET['user_id'];

$query = "select * from notes where id=:id;";

$note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === 2);

view('notes/edit.view.php', [
  'heading' => 'Edit Note',
  'note' => $note
]);