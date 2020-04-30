<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Controllers\View;

class UserController
{
    public function __construct($id)
    {

        if (isset($_POST['set'])) {
            $id = $_POST['set'];
            $this->setAdmin($id);
        }
        if (isset($_POST['unset'])) {
            $id = $_POST['unset'];
            $this->unsetAdmin($id);
        }
        $singleUser = $this->getSingleUser($id);
        new View('Views/Admin/viewUser.php', array(
            'user' => $singleUser
        ));
    }

    public function getSingleUser($id)
    {
        $user = new UserModel();
        $singleUser = $user->getUser($id);
        return $singleUser;
    }
    public function setAdmin($id)
    {
        $user = new UserModel();
        $user->setAdmin($id);
    }
    public function unsetAdmin($id)
    {
        $user = new UserModel();
        $user->unsetAdmin($id);
    }
}
