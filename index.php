<?php

require_once __DIR__ . '/vendor/autoload.php';

use \App\Controllers\Adm\Home;

echo $obHome = Home::getHome();
