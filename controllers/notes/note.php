<?php

$heading = "Your Notes";


$config = require(base_path('./config.php'));
// connect to database
$db = new Database($config['database']);
// $user_id = $_GET['user_id'];
$query = "select * from notes where id=:id;";

$note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

// if (!$note) {
//   abort(404, "Not Found");
// }

// if ($note['user_id'] !== 2) {
//   abort(403, "Access Forbidden");
// }

authorize($note['user_id'] === 2);

// dd($note);

// require "./views/notes/note.view.php";
view('notes/note.view.php', [
  'note' => $note,
  'heading' => 'Your Notes'
]);
