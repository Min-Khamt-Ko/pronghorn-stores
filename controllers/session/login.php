<?php

use Core\Session;

view ('session/login.view.php',[
    "errors" => Session::get('errors')
]);
