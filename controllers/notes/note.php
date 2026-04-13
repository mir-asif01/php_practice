<?php

use Core\Database;

$config = require(base_path('./config.php'));

$heading = "Your Notes";


// connect to database
$db = new Database($config['database']);
// $user_id = $_GET['user_id'];

  $query = "select * from notes where id=:id;";

  $note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

  authorize($note['user_id'] === 2);

  // require "./views/notes/note.view.php";
  view('notes/note.view.php', [
    'note' => $note,
    'heading' => 'Your Notes'
  ]);
