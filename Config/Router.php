<?php

namespace App\Config;
use App\Controllers\AccueilController;
use App\Controllers\User\DashboardController;
use App\Controllers\User\SignInController;
use App\Controllers\User\LoginController;
use App\Controllers\User\DisconnectController;
use App\Controllers\Post\AddPostController;
use App\Controllers\Post\ListPostsController;
use App\Controllers\Post\SinglePostController;
use App\Controllers\Post\UpdatePostController;
use App\Controllers\Comment\CommentController;
use App\Controllers\Admin\AdminController;
use App\Controllers\Admin\UserController;
class Router
{
    private $_404 = '404';
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
            $this->_404 = '';
        }
        if ($url[0] == 'deconnexion') {
            if (isset($_SESSION['id'])) {
                new DisconnectController();
                $this->_404 = '';
            } else {
                new AccueilController();
            }
        }
        if ($url[0] == 'compte') {
            if (isset($_SESSION['id'])) {
                new DashboardController();
                $this->_404 = '';
            } else {
                new AccueilController();
            }
        }

        if ($url[0] == 'connexion') {
            if (!isset($_SESSION['id'])) {
                new SignInController();
                $this->_404 = '';
            } else {
                new AccueilController();
            }
        }
        if ($url[0] == 'inscription') {
            if (!isset($_SESSION['id'])) {
                new LoginController();
                $this->_404 = '';
            } else {
                new AccueilController();
            }
        }
        if ($url[0] == 'articles' && (!isset($url[1]))) {
            new ListPostsController();
            $this->_404 = '';
        }
        if ($url[0] == 'article') {
            if (!empty($url[1]) && (intval($url[1]) > 0)) {
                new SinglePostController(intval($url[1]));
                $this->_404 = '';
            } 
        }
        if ($url[0] == 'modifier-article') {
            if (!empty($url[1]) && (intval($url[1]) > 0)) {
                new UpdatePostController($url[1]);
                $this->_404 = '';
            }
        }
        if ($url[0] == 'ajouter-article') {
            if ($_SESSION['role'][0] == 'Admin') {
                new AddPostController();
                $this->_404 = '';
            }
        }
        if ($url[0] == 'commentaire' && (isset($url[1])) && (intval($url[1]) > 0)) {
            new CommentController($url[1]);
            $this->_404 = '';
        }
        if ($url[0] == 'administration') {
            if (isset($_SESSION['id']) && ($_SESSION['role'][0] == 'Admin')) {

                new AdminController();
                $this->_404 = '';
            } else {
                new AccueilController();
            }
        }
        
        if ($url[0] == 'utilisateur') {
            if (!empty($url[1]) && (intval($url[1]) > 0)) {
                if (isset($_SESSION['id']) && ($_SESSION['role'][0] == 'Admin')) {

                    new UserController($url[1]);
                    $this->_404 = '';
                } else {
                    new AccueilController();
                }
            } else {
                new AccueilController();
            }
        }

        if ($this->_404 == '404') {
            require 'Views/404.php';
        }
    }
}