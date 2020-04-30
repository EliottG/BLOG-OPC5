<?php

namespace App\Config;

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
    }
}