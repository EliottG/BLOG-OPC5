<?php

namespace App\Controllers\Admin;

use App\Models\PostsModel;
use App\Models\CommentsModel;
use App\Models\UserModel;
use App\Controllers\View;

class AdminController
{
    public function __construct()
    {
        $listUser = $this->getUsers();
        $listPosts = $this->getPosts();
        $listComments = $this->getComments();
        if (isset($_POST['validate'])) {
            $id = $_POST['validate'];
            $this->validComment($id);
        }
        if (isset($_POST['suppr'])) {
            $postId = $_POST['suppr'];
            $this->supprPost($postId);
        }
            new View('Views/admin/viewDashboard.php', array(
                'user' => $listUser,
                'posts' => $listPosts,
                'comments' => $listComments
            ));
       
    }

    public function getUsers()
    {
        $user = new UserModel();
        $userList = $user->getUsers();
        return $userList;
    }
    public function getPosts()
    {
        $post = new PostsModel();
        $postList = $post->getPosts();
        return $postList;
    }
    public function getComments()
    {
        $comment = new PostsModel();
        $postComments = $comment->getComments();
        return $postComments;
    }
    public function validComment($id)
    {
        $comment = new CommentsModel();
        $comment->validComment($id);
        header('Location:' . ROOT_DIR . 'administration');
    }
    public function supprPost($id) {
        $post = new PostsModel();
        $post->supprPost($id);
        header('Location:' . ROOT_DIR . 'administration');
    }
}
