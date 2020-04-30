<?php

namespace App\Config;
use App\Controllers\AccueilController;
class Router
{
    private $_url;
    public function __construct($url)
    {
        $this->_url = $url;
        $this->routing($this->_url);
    }
    public function routing($url)
    {
        if ($url[0] == 'accueil' && (!isset($url[1]))) {
            new AccueilController();
        }
    }
}