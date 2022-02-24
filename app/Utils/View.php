<?php

namespace App\Utils;

class View
{
    /**
     * Método responsável por retornar a [VIEW]
     * @param string [$view]
     */
    private static function getContent($view)
    {

        $file = __DIR__ . '/../../public/view/' . $view . '.html';

        return file_exists($file) ? file_get_contents($file) : "";
    }
    /**
     * Método responsável por retornar uma view renderizada
     * @param string [$view]
     */
    public static function render($view, $vars = [])
    {
        $content = self::getContent($view);

        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return "{{" . $item . "}}";
        }, $keys);

        $values = array_values($vars);

        // echo "<pre>";
        // var_dump($values);
        // exit;

        return str_replace($keys, $values, $content);
    }
}
