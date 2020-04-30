<?php

namespace App\Models;

class Model
{


    protected function getDb()
    {
        if (!isset($db)) {
            try {
                $db = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
            } catch (\Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        return $db;
    }
}
