<?php

namespace App\Controllers\User;

use App\Controllers\View;
use App\Models\UserModel;


class LoginController
{
    public function __construct()
    {
        if (isset($_POST['send'])) {
            $test =   $this->verifyLogin();
            new View('Views/user/viewLogIn.php', array(
                'test' => $test
            ));
        } else {
            new View('Views/user/viewLogIn.php');
        }
    }




    public function verifyLogin()
    {
        $nameError = $firstnameError = $pseudoError = $passwordError = $confPasswordError = '';
        $isSuccess = true;
        if (!empty($_POST['name'])) {
            $name = htmlspecialchars($_POST['name']);
        } else {
            $nameError = 'Il manque le nom';
            $isSuccess = false;
        }
        if (!empty($_POST['firstname'])) {
            $firstname = htmlspecialchars($_POST['firstname']);
        } else {
            $firstnameError = 'Il manque un prénom';
            $isSuccess = false;
        }
        if (!empty($_POST['pseudo'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $search = new UserModel();
            $searchPseudo = $search->searchPseudo($pseudo);
            if (!empty($searchPseudo)) {
                $pseudoError = 'Ce pseudo est déjà pris';
                $isSuccess = false;
            }
        } else {
            $pseudoError = 'Il manque un pseudo';
            $isSuccess = false;
        }
        if (!empty($_POST['password'])) {
            if (!empty($_POST['confPassword'])) {
                if ($_POST['password'] == $_POST['confPassword']) {
                    $password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_DEFAULT));
                } else {
                    $passwordError = 'Les mots de passe ne correspondent pas';
                    $isSuccess = false;
                }
            } else {
                $confPasswordError = 'Il faut confirmer le mot de passe';
                $isSuccess = false;
            }
        } else {
            $passwordError = 'Il faut un mot de passe';
            $isSuccess = false;
        }


        if ($isSuccess) {
            $addUser = new UserModel();
            $addUser->addUser($name, $firstname, $pseudo, $password);
            $success = 'success';
            return $success;
        } else {
            $errors = [
                'name' => $nameError,
                'firstname' => $firstnameError,
                'pseudo' => $pseudoError,
                'password' => $passwordError,
                'confPassword' => $confPasswordError
            ];
            return $errors;
        }
    }
}
