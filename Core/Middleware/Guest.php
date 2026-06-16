<?php

namespace Core\Middleware;

class Guest
{
  public function handle()
  {
    if (isset($_SESSION['user'])) {
      return redirect('/notes');
    }
  }
}