<?php

namespace App\Controllers\Post;

use App\Controllers\View;
use App\Models\PostsModel;

class AddPostController
{
    public function __construct()
    {
        $add = '';
        if (isset($_POST['send'])) {
          $add =  $this->addPost();
          new View('Views/post/viewAddPost.php', array(
            'success' => $add
        ));
        } else {
        new View('Views/post/viewAddPost.php');
    }
}


    public function addPost()
    {
        $post = new PostsModel();
        if (!empty($_POST['title']) && (!empty($_POST['content'])) && (!empty($_POST['chapo'])) && (!empty($_POST['author']))) {
            $title = htmlspecialchars($_POST['title']);
            $content = htmlspecialchars($_POST['content']);
            $chapo = htmlspecialchars($_POST['chapo']);
            $author = htmlspecialchars($_POST['author']);
            $post->addPost($title, $content, $author, $chapo, $_SESSION['id'][0][0]);
            header('Location:' . ROOT_DIR . 'articles');
        }
    }
}
