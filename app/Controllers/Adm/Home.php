<?php

namespace App\Controllers\Adm;

use \App\Utils\View;
use \App\Controllers\Page;

class Home extends Page
{

    public static function getHome()
    {
        $content =  View::render('adm/home');
        return parent::geIndex('Page Home', $content);
    }
}
