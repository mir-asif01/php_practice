<?php
use Core\Session;

view("auth/login.view.php", [
  'heading' => 'Login',
  'errors' => Session::get('errors') ?? []
]);