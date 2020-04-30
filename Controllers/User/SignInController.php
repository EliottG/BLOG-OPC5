<?php

namespace App\Controllers\User;

use App\Controllers\AccueilController;
use App\Controllers\View;
use App\Models\UserModel;

class SignInController
{
    public function __construct()
    {

        if (isset($_POST['send'])) {
            $check = $this->verifySignin();
            new View('Views/user/viewSignIn.php', array(
                'error' => $check
            ));
        } else {
            new View('Views/user/viewSignIn.php');
        }
    }
    public function verifySignIn()
    {
        $error = $success =  '';
        if (isset($_POST['id']) && isset($_POST['password'])) {
            $pseudo = htmlspecialchars($_POST['id']);
            $password = htmlspecialchars($_POST['password']);
            $test = new UserModel();
            $checkLogs = $test->testSignin($pseudo);
            if (!empty($checkLogs)) {
                if (password_verify($password, $checkLogs[0])) {
                    $role = $test->getRole($_POST['id']);
                } else {
                    $error = 'Pseudo ou mot de passe incorrect';
                }
            } else {
                $error = 'Pseudo ou mot de passe incorrect';
            }
        } else {
            $error = 'Il faut remplir tout les champs';
        }

        if (empty($error)) {
            session_start();
            $_SESSION['id'] = $test->getId($pseudo);
            $_SESSION['pseudo'] =  $pseudo;
            $_SESSION['role'] =  $role;
            $error = '';
            $ini = parse_ini_file(dirname(__DIR__) . '/config/config.ini');
            header("Location:" . $ini['file_name'] . 'accueil');
            return $error;
        } else {
            return $error;
        }
    }
}
