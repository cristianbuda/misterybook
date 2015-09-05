<?php

// Starts session
session_start();

// Include models
include 'mvc/model/user.php';

// Include config file
include 'config.php';

// Database connection
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysqli_error($dbc));
// Database connection singleton
// include 'mvc/model/DB.php';

// Check user
if (isset($_SESSION['user_id'])) {
  $user = user_get_details($_SESSION['user_id']);
}

$controller = 'index';
if (isset($_GET['controller'])) {
  if (file_exists(realpath('mvc/controller/' . $_GET['controller'] . '.php'))) {
    $controller = $_GET['controller'];
  }
}

$view = $controller;

include 'mvc/controller/' . $controller . '.php';

if (!file_exists(realpath('mvc/view/' . $view . '.tpl.php'))) {
    $view = 'index';
}

include 'mvc/view/' . $view . '.tpl.php';

?> 