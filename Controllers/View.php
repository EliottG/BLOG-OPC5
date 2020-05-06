<?php

namespace App\Controllers;

class View
{
    public $data;
    public function __construct($path, $data = null)
    {
        $ini = parse_ini_file(dirname(__DIR__) . '/config/config.ini');
        
        ob_start();
        
        
        
        require $path;
        $content = ob_get_clean();
        require 'Views/template.php';
    }
}
