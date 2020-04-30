<?php

namespace App\Controllers\Post;

use App\Controllers\View;
use App\Models\PostsModel;


class ListPostsController
{
    public function __construct()
    {
        $listPosts = $this->getPosts();
    }

    public function getPosts()
    {
        $posts = new PostsModel();
        $listPosts = $posts->getPosts();
        $pagingPost = $posts->pagingPosts();
        new View('Views/post/viewListPosts.php', array(
            'posts' => $listPosts
        ));
    }
}
