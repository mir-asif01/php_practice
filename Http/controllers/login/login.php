<?php

view("auth/login.view.php", [
  'heading' => 'Login',
  'errors' => $_SESSION['__flash']['errors'] ?? []
]);