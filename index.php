<?php

// Starts session
session_start();

// Include models
include 'mvc/model/user.php';

// Include config file
include 'config.php';

// Database connection
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysqli_error($dbc));

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

include 'mvc/controller/' . $controller . '.php';

include 'mvc/view/' . $controller . '.tpl.php';

?>