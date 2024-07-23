<?php

$config = require base_path('config.php');

$db = new \Core\Database($config['database']);


view('index.view.php');
