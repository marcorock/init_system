<?php

namespace App\Controllers;

use \App\Utils\View;

class Page
{
    public static function geIndex()
    {
        return View::render('page', [
            'title' => 'Home',
            'content' => 'Conteúdo da página'
        ]);
    }
}
