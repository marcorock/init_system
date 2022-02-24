<?php

namespace App\Controllers;

use \App\Utils\View;

class Page
{
    //USANDO A TRAIT PARA TRAZER AS VIEWS PRINCIPAIS DO SISTEMA
    use \App\Traits\Framework;

    /**
     * Método responsável por retornar o index default do sistema
     */
    public static function geIndex($title, $content, $styles = NULL, $scripts = NULL)
    {
        return View::render('page', [
            'title' => $title,
            'header' => self::GetHeaders($styles),
            'sidebar' => self::GetSidebar(),
            'topbar' => self::GetTopbar(),
            'content' => $content,
            'footer' => self::GetFooters($scripts),
        ]);
    }
}
