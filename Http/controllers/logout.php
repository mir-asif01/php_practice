<?php

use Core\Session;

unset($_SESSION['user']);
return redirect("/");