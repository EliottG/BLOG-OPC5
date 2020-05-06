<?php

namespace App\Controllers\Post;

use App\Controllers\View;
use App\Models\PostsModel;

class UpdatePostController
{
    private $_id;
    public function __construct($id)
    {
        $this->_id = $id;
        if ((isset($_SESSION['id']))) {
            $verify = $this->verifyOwner();
            if ($verify == true) {
                $update = $this->updatePost();
                if (isset($_POST['send'])) {
                    $modify = $this->setUpdatePost();
                }
                new View('Views/post/viewUpdatePost.php', array(
                    'update' => $update
                ));
            }
        }
    }



    public function updatePost()
    {
        $post = new PostsModel();
        $getPost =  $post->getPost($this->_id);
        return $getPost;
    }
    public function setUpdatePost()
    {
        $post = new PostsModel();
        if (!empty($_POST['author']) && !empty($_POST['title']) && !empty($_POST['chapo']) && !empty($_POST['content'])) {
            $author = $_POST['author'];
            $title  = $_POST['title'];
            $chapo = $_POST['chapo'];
            $content = $_POST['content'];
            $post->updatePost($this->_id, $author, $title, $chapo, $content);
            $ini = parse_ini_file(dirname(__DIR__) . '/config/config.ini');
            header('Location:' . ROOT_DIR . 'article/' . $this->_id);
        }
    }

    public function verifyOwner()
    {
        $post = new PostsModel();
        $this->verify = $post->verifyOwner($_SESSION['id'][0][0], $this->_id);
        if (isset($this->verify['ID'])) {
            if ($this->verify['ID'] ==  $this->_id) {
                return true;
            } else {
                return false;
            }
        }
    }
}
