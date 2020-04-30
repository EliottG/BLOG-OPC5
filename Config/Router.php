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
        if ($url[0] == 'articles' && (!isset($url[1]))) {
            new ListPostsController();
        }
        if ($url[0] == 'article') {
            if (!empty($url[1]) && (intval($url[1]) > 0)) {
                new SinglePostController(intval($url[1]));
            } else {
                echo '404';
            }
        }
        if ($url[0] == 'modifier-article') {
            if (!empty($url[1]) && (intval($url[1]) > 0)) {
                new UpdatePostController($url[1]);
            }
        }
        if ($url[0] == 'ajouter-article') {
            if ($_SESSION['role'][0] == 'Admin') {
                new AddPostController();
            }
        }
        if ($url[0] == 'commentaire' && (isset($url[1])) && (intval($url[1]) > 0)) {
            new CommentController($url[1]);
        }
    }
}