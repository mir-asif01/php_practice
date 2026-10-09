<?php

$errors = [];
view("posts/create.view.php", [
  'heading' => "Create Post",
  'errors' => $errors
]);
