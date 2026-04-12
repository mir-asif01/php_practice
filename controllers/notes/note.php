<?php

use Core\Database;

$config = require(base_path('./config.php'));

$heading = "Your Notes";


// connect to database
$db = new Database($config['database']);
// $user_id = $_GET['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // find note in the database and authorize user
  $query = "select * from notes where id=:id;";
  $note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

  authorize($note['user_id'] === 2);

  $db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
  ]);

  header('location:/notes');
  exit;
  // dd($_POST);
} else {
  $query = "select * from notes where id=:id;";

  $note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

  authorize($note['user_id'] === 2);

  // require "./views/notes/note.view.php";
  view('notes/note.view.php', [
    'note' => $note,
    'heading' => 'Your Notes'
  ]);
  }