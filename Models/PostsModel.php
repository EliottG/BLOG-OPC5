<?php

namespace App\Models;

class PostsModel extends Model
{


    public function getPosts()
    {
        $db = $this->getDb();
        $this->req = $db->query('SELECT ID,title,chapo,author, DATE_FORMAT(last_update, \'%d/%m/%Y\') as last_update  FROM post ');
        $this->posts = $this->req->fetchAll();
        return $this->posts;
    }

    public function getPost($postId)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('SELECT * FROM post WHERE ID = ?');
        $this->req->execute(array($postId));
        $this->post = $this->req->fetch();
        return $this->post;
    }
    public function getCommentsPost($postId)
    {
        $db = $this->getDb();
        $this->req = $db->prepare("SELECT ID,author,content, DATE_FORMAT(creation_date, '%d/%m/%Y') as creation_date FROM comment_post WHERE post_id = ? && is_validate = 1");
        $this->req->execute(array($postId));
        $this->data = $this->req->fetchAll();
        return $this->data;
    }
    public function addPost($title, $content, $author, $chapo, $user_id)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('INSERT INTO post (title, content, author , chapo, last_update, user_id) VALUES (:title, :content, :author, :chapo, NOW(), :user_id)');
        $this->req->execute(array(
            'title' => $title,
            'content' => $content,
            'author' => $author,
            'chapo' => $chapo,
            'user_id' => $user_id
        ));
    }
    public function getPostsUser($userId)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('SELECT title, ID FROM post WHERE user_id = ?');
        $this->req->execute(array($userId));
        $this->data = $this->req->fetchAll();
        return $this->data;
    }
    public function updatePost($id, $author, $title, $chapo, $content)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('UPDATE post 
        SET title = :title, content = :content , author  = :author , last_update = NOW() , chapo = :chapo
        WHERE ID = :id');
        $this->req->execute(array(
            'title' => $title,
            'content' => $content,
            'author' => $author,
            'chapo' => $chapo,
            'id' => $id
        ));
    }
    public function verifyOwner($userId, $idPost)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('SELECT * FROM post WHERE user_id = :userid && ID = :idpost');
        $this->req->execute(array(
            'userid' => $userId,
            'idpost' => $idPost
        ));
        $this->data = $this->req->fetch();
        return $this->data;
    }

    public function pagingPosts()
    {
        $db = $this->getDb();
        $this->req = $db->query('SELECT COUNT(ID) FROM POST');
        $this->data = $this->req->fetch();
    }
    public function getComments()
    {
        $db = $this->getDb();
        $this->req = $db->query('SELECT content, ID, author FROM comment_post WHERE is_validate = 0');
        $this->data = $this->req->fetchAll();
        return $this->data;
    }

    public function supprPost($id) {
        $db = $this->getDb();
        $this->req = $db->prepare('DELETE FROM post WHERE ID = ?');
        $this->req->execute(array($id));
    }
}
