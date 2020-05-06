<?php

namespace App\Controllers;

class View
{
    public $data;
    public function __construct($path, $data = null)
    {
        $ini = parse_ini_file(dirname(__DIR__) . '/config/config.ini');
        $this->data = $data;
        ob_start();
        require $path;
        $content = ob_get_clean();

        $flash = false;
        if(isset($_SESSION['message']) && $_SESSION['message']){
            $flash = $_SESSION['message'];
            unset($_SESSION['message']);
        }
        require 'Views/template.php';
    }
}
