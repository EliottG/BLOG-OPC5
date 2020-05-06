<?php

namespace App\Controllers\Comment;

use App\Controllers\View;
use App\Models\CommentsModel;

class CommentController
{
    private $_id;
    public function __construct($id)
    {
        $post = $id;
        if (isset($_POST['send'])) {
            $this->verifAddComments($post);
        }
        new View('Views/comments/viewAddComment.php', array(
            'ID' => $post
        ));
    }
    /**
     * Add comments
     */
    public function verifAddComments($post)
    {
        if (!empty($_POST['content'])) {
            $content = $_POST['content'];
            $addComment = new CommentsModel;
            $addComment->addComments($_SESSION['pseudo'], $content, $post, $_SESSION['id'][0][0]);    
            
            $_SESSION['message'] = "Commentiare ajouté";
            
            header('Location:' . ROOT_DIR . 'article/' . $post);
        }
    }
}
