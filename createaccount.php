<?php

// Define the file path
$login_file = 'login.txt';

// Function to check if a username already exists in the login file
function check_username($username) {
  global $login_file;
  $login_data = file_get_contents($login_file);
  $users = explode(' ', $login_data);
  foreach($users as $user) {
    list($user_name, $user_pass) = explode(':', $user);
    if(trim($user_name) == $username) {
      return true;
    }
  }
  return false;
}

// Function to validate a username and password
function validate_user($username, $password) {
  // Check username format
  if(!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
    return false;
  }
  // Check password format
  if(!preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{4,}$/', $password)) {
    return false;
  }
  return true;
}

// Check if the form was submitted
if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  // Validate the username and password
  if(validate_user($username, $password)) {
    // Check if the username already exists
    if(check_username($username)) {
      echo "Username already in use. Please choose a different username and try again.";
    } else {
      // Add the new user to the login file
      $new_user = $username . ':' . $password . ' ';
      file_put_contents($login_file, $new_user, FILE_APPEND);
      echo "Account created successfully! You can now login whenever you are ready.";
    }
  } else {
    echo "Invalid username or password format. Please follow the allowed formats for usernames and passwords.";
  }
}

?>

<!-- Login creation form HTML -->
<form method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" required><br><br>
  <label for="password">Password:</label>
  <input type="password" name="password" required><br><br>
  <input type="submit" name="submit" value="Create Account">
</form>

<!-- Allowed format description HTML -->
<p>Username can contain letters (both upper and lower case) and digits only.</p>
<p>Password must be at least 4 characters long (characters are to be letters and digits only), have at least one letter and at least one digit.</p>
