<?php

namespace App\Controllers\User;

use App\Controllers\View;
use App\Models\PostsModel;
use App\Models\CommentsModel;

class DashboardController
{
    public function __construct()
    {
        if (isset($_SESSION['id'])) {
            
            new View('Views/user/viewDasboard.php', array(
                
            ));
        }
    }

}
