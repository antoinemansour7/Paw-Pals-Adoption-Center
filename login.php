<?php

// Define the file path
$login_file = 'login.txt';

// Function to check if a user exists in the login file
function check_user($username, $password) {
  global $login_file;
  $login_data = file_get_contents($login_file);
  $users = explode(' ', $login_data);
  foreach($users as $user) {
    list($user_name, $user_pass) = explode(':', $user);
    if(trim($user_name) == $username && trim($user_pass) == $password) {
      return true;
    }
  }
  return false;
}

// Function to add a new user to the login file
function add_user($username, $password) {
  global $login_file;
  $new_user = $username . ':' . $password . ' ';
  file_put_contents($login_file, $new_user, FILE_APPEND);
}

?>
