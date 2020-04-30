<?php

namespace App\Config;
use App\Controllers\AccueilController;
use App\Controllers\User\DashboardController;
use App\Controllers\User\SignInController;
use App\Controllers\User\LoginController;
use App\Controllers\User\DisconnectController;
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
        if ($url[0] == 'deconnexion') {
            if (isset($_SESSION['id'])) {
                new DisconnectController();
            } else {
                new AccueilController();
            }
        }
        if ($url[0] == 'compte') {
            if (isset($_SESSION['id'])) {
                new DashboardController();
            } else {
                new AccueilController();
            }
        }

        if ($url[0] == 'connexion') {
            if (!isset($_SESSION['id'])) {
                new SignInController();
            } else {
                new AccueilController();
            }
        }
        if ($url[0] == 'inscription') {
            if (!isset($_SESSION['id'])) {
                new LoginController();
            } else {
                new AccueilController();
            }
        }
    }
}