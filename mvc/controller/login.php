<?php

$login_errors = array();

if (isset($_POST['mail'])) {

  if (FALSE === filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    $login_errors[] = 'Email is not valid';
  }

  if (strlen($_POST['pass']) === 0) {
    $login_errors[] = 'Password is empty';
  }

  if (empty($login_errors)) {
    $user_id = user_get_id($_POST['mail'], $_POST['pass']);

    if ($user_id) {
      $_SESSION['user_id'] = $user_id;
      header('Location: index.php');
      die;
    }
  }

}

?>