<?php

namespace App\Models;

class UserModel extends Model
{

    /**
     * Ajouter dans user (base de donnée)
     */
    public function addUser($name, $firstname, $pseudo, $password)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('INSERT INTO user (name, firstname, pseudo, password , creation_date ) 
        VALUES (:name, :firstname, :pseudo, :password, NOW())');
        $this->req->execute(array(
            'name' => $name,
            'firstname' => $firstname,
            'pseudo' => $pseudo,
            'password' => $password
        ));
    }

    /**
     * Rechercher si un pseudo est identique
     */
    public function searchPseudo($pseudo)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('SELECT pseudo FROM user WHERE pseudo = ?');
        $this->req->execute(array($pseudo));
        $this->data = $this->req->fetch();
        return $this->data;
    }
    public function testSignin($pseudo)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('SELECT password FROM user WHERE pseudo  = ?');
        $this->req->execute(array($pseudo));
        $this->data = $this->req->fetch();
        return $this->data;
    }

    public function getId($pseudo)
    {
        $db = $this->getDb();
        $this->req = $db->prepare('SELECT ID FROM user WHERE pseudo  = ?');
        $this->req->execute(array($pseudo));
        $this->data = $this->req->fetchAll();
        return $this->data;
    }
    public function getRole($id)
    {
        $db =  $this->getDb();
        $this->req = $db->prepare('SELECT role FROM user WHERE pseudo  = ?');
        $this->req->execute(array($id));
        $this->data = $this->req->fetch();
        return $this->data;
    }
    public function getUsers()
    {
        $db =  $this->getDb();
        $this->req = $db->query('SELECT * FROM user');
        $this->data = $this->req->fetchAll();
        return $this->data;
    }
    public function getUser($id)
    {
        $db =  $this->getDb();
        $this->req = $db->prepare('SELECT * FROM user WHERE id  = ?');
        $this->req->execute(array($id));
        $this->data = $this->req->fetch();
        return $this->data;
    }
    public function setAdmin($id)
    {
        $db =  $this->getDb();
        $this->req = $db->prepare("UPDATE user SET role = 'Admin' WHERE ID = ?");
        $this->req->execute(array($id));
    }
    public function unsetAdmin($id)
    {
        $db =  $this->getDb();
        $this->req = $db->prepare("UPDATE user SET role = 'User' WHERE ID = ?");
        $this->req->execute(array($id));
    }
}
