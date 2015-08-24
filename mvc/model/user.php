<?php

function user_get_id($email, $password)
{
  global $dbc;

  $user_id = FALSE;

  $sql = '
    SELECT id 
    FROM users 
    WHERE
      email = "' . $email . '"
      AND password = "' . sha1(SHA1_SALT . $password) . '"
  ';

  $user_rows = mysqli_query($dbc, $sql);

  if ($user_rows) {
    if ($user_row = mysqli_fetch_assoc($user_rows)) {
      $user_id = $user_row['id'];
    }
  }

  return $user_id;
}

function user_get_details($user_id)
{
  global $dbc;

  $sql = '
    SELECT id, name, email 
    FROM users 
    WHERE id = ' . $user_id . '
  ';

  $user_rows = mysqli_query($dbc, $sql);

  if ($user_rows) {
    $user_row = mysqli_fetch_assoc($user_rows);
  }

  return $user_row;

}

function user_email_exists ($email) {

  global $dbc;

  $q = "SELECT * FROM users WHERE email = '$email'";
  $r = mysqli_query($dbc, $q);

  if ($user_exists = mysqli_fetch_assoc($r)) {
    return TRUE; 
  } else {
    return FALSE;
  }

}

function user_insert ($name, $email, $bio, $password) {

  global $dbc;

  $q = "INSERT INTO users (name, email, bio, password) VALUES ('$name', '$email', '$bio', '$password')";
  $r = mysqli_query($dbc, $q);

  if ($r) {
    return TRUE;
  } else {
    return FALSE;
  }

}

?>