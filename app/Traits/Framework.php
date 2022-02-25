<?php

namespace App\Traits;

use App\Utils\View;

trait Framework
{
    public static function GetHeaders($styles)
    {
        return View::render('includes/header', [
            'styles' => $styles
        ]);
    }

    public static function GetFooters($scripts)
    {
        return View::render('includes/footer', [
            'company' =>  COMPANY,
            'system' => SYSTEM,
            'year' => date('Y'),
            'script' => $scripts
        ]);
    }

    /**
     * Método responsável por retornar uma barra de navegação a direita do sistema.
     * Precisa definir os parametros desta
     */
    public static function GetSidebar()
    {
        return View::render('includes/sidebar');
    }

    /**
     * Método responsável por retornar uma barra de navegação no topo do sistema
     * Precisa ter dropdown de [ALERTA],[MENSAGEM] e [USER], com informações do usuários
     * 
     */
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
