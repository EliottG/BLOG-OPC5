<?php

namespace App\Controllers\User;

class DisconnectController
{

    public function __construct()
    {
        $dc = $this->disconnectUser();
    }

    public function disconnectUser()
    {
        session_destroy();
        $ini = parse_ini_file(dirname(__DIR__) . '/config/config.ini');
        header("Location:" . $ini['file_name'] . 'accueil');
    }
}
