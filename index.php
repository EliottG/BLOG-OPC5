<?php 
namespace App;
use App\Config\Router;
use App\Controllers\AccueilController;
session_start();

$ini = parse_ini_file('./Config/config.ini');
define('DB_HOST', $ini['db_host']);
define('DB_NAME', $ini['db_name']);
define('DB_USER', $ini['db_user']);
define('DB_PASSWORD', $ini['db_password']);
define('ROOT_DIR', $ini['ROOT_DIR']);
require 'vendor/autoload.php';

if (!empty($_GET)) {
    $url = explode('/' , $_GET['url']);
    new Router($url);
}  else {
    new AccueilController();
}