<?php

namespace App\Controllers\Post;

use App\Controllers\View;
use App\Models\PostsModel;

class SinglePostController
{
    private $_id;
    public function __construct($id)
    {
        $this->_id = $id;
        $this->getPost($this->_id);
    }



    public function getPost($id)
    {
        $post = new PostsModel;
        $allComments = new PostsModel();
        $singlePost = $post->getPost($id);
        if (!empty($singlePost )) {
        $comments = $allComments->getCommentsPost($id);
        new View('Views/post/viewPost.php', array(
            'post' => $singlePost,
            'comments' => $comments
        ));
    } else {
        require 'Views/404.php';
    }
    }
}
