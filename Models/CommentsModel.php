<?php

namespace App\Models;

class CommentsModel extends Model
{
    public function addComments($author, $content, $postId, $userId)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('INSERT INTO comment_post (author , content , creation_date, post_id, is_validate, user_id) VALUES (:author , :content , NOW(), :post_id , 0 , :user_id)');
        $this->req->execute(array(
            'author' => $author,
            'content' => $content,
            'post_id' => $postId,
            'user_id' => $userId
        ));
    }
    public function getCommentsUser($userId)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('SELECT * FROM comment_post WHERE user_id = ?');
        $this->req->execute(array($userId));
        $this->data = $this->req->fetchAll();
        return $this->data;
    }
    public function validComment($id)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('UPDATE comment_post SET is_validate = 1 WHERE ID = ?');
        $this->req->execute(array($id));
    }
}
