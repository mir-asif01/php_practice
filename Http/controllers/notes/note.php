<?php

use Core\App;

$heading = "Your Notes";

// connect to database
$db = App::getContainer()->resolve('Core\Database');
// $user_id = $_GET['user_id'];

$query = "select * from notes where id=:id;";

$note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === 2);

// require "./views/notes/note.view.php";
view('notes/note.view.php', [
  'note' => $note,
  'heading' => 'Your Notes'
]);
