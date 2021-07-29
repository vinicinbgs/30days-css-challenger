<?php

namespace App\Http;

class View
{
    public static function load(string $template, array $data = [])
    {
        try {
            $file = 'src/public/views/' . strtolower($template) . '.php';
            extract($data);
            include($file);
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
        }
    }
}
