<?php

namespace App\Controllers\User;

use App\Controllers\View;
use App\Models\PostsModel;
use App\Models\CommentsModel;

class DashboardController
{
    public function __construct()
    {
        if (isset($_SESSION['id'])) {
            $posts = $this->getPostsUser();
            $comments = $this->getCommentsUser();
            new View('Views/user/viewDasboard.php', array(
                'posts' => $posts,
                'comments' => $comments
            ));
        }
    }


    public function getPostsUser()
    {
        $getPosts = new PostsModel();
        $idUser = $_SESSION['id'][0][0];
        $posts = $getPosts->getPostsUser($idUser);
        return $posts;
    }
    public function getCommentsUser()
    {
        $getComments = new CommentsModel();
        $idUser = $_SESSION['id'][0][0];
        $comments = $getComments->getCommentsUser($idUser);
        return $comments;
    }
}

