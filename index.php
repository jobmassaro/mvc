<?php

use app\models\MySqlDatabase;
use app\controllers\HomeController;

require_once 'app/start.php';
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();

define( "FRAMEWORK_PATH", dirname( __FILE__ ) ."/" );

$home = new HomeController();
$home->home();










