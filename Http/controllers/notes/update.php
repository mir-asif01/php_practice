<?php

use Core\App;
use Core\Validator;

// connect to database
$db = App::getContainer()->resolve('Core\Database');
// $user_id = $_GET['user_id'];

$query = "select * from notes where id=:id;";

$note = $db->query($query, ['id' => $_POST['id']])->findOrFail();

authorize($note['user_id'] === 2);

$errors = [];
$validator = new Validator();

if (!$validator->string($_POST['title'], 0, 30)) {
  $errors['title'] = "Title's length min 0 and max 30";
}

if (!$validator->string($_POST['body'], 0, 100)) {
  $errors['body'] = "Body's length min 0 and max 100";
}

if (!empty($errors)) {
  return view('notes/edit.view.php', [
    'errors' => $errors,
    'heading' => 'Edit Note',
    'note' => $note
  ]);
}

$query = "update notes set title = :title, body=:body where id=:id;";

$note = $db->query($query, [
  'title' => $_POST['title'],
  'body' => $_POST['body'],
  'id' => $_POST['id']
]);

header('location: /notes');
die();
