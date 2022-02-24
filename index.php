<?php

require_once __DIR__ . '/core/config.php';

use \App\Controllers\Adm\Home;

echo $obHome = Home::getHome();
