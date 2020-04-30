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
            new View('Views/user/viewDasboard.php', array(
                'posts' => $posts,
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

}
