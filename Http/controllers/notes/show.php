<?php

use Core\App;

$heading = "Your Notes";


$db = App::getContainer()->resolve('Core\Database');
// dd($db);
$query = "select * from notes where user_id=2;";

$notes = $db->query($query)->findAll();

// dd($notes);

// require "./views/notes/notes.view.php";
view('notes/notes.view.php', [
  'notes' => $notes,
  'heading' => 'Your Notes'
]);
