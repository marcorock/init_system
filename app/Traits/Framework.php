<?php

namespace App\Traits;

use App\Utils\View;

trait Framework
{
    public static function GetHeaders()
    {
        return View::render('includes/header');
    }

    public static function GetFooters()
    {
        return View::render('includes/footer');
    }

    public static function GetSidebar()
    {
        return View::render('includes/sidebar');
    }

    public static function GetTopbar()
    {
        return View::render('includes/topbar');
    }

    public static function GetStyles()
    {
        return View::render('');
    }

    public static function GetScripts()
    {
        return View::render('');
    }
}
