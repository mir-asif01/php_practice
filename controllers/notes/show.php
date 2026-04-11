<?php

$heading = "Your Notes";


$config = require('./config.php');
// connect to database
$db = new Database($config['database']);
// $user_id = $_GET['user_id'];
$query = "select * from notes where user_id=2;";

$notes = $db->query($query)->findAll();

// dd($notes);

require "./views/notes/notes.view.php";
