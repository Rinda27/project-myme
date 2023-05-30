<?php

// Create the form
echo <<<HTML
<form action="/login" method="post">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" value="Login">
</form>
HTML;

// Check if the form has been submitted
if (isset($_POST['username']) && isset($_POST['password'])) {

  // Validate the form data
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the username and password are correct
  $user = $db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");

  if ($user->num_rows == 1) {

    // The user is logged in
    $_SESSION['username'] = $username;
    header('Location: /home');

  } else {

    // The user is not logged in
    echo "Invalid username or password";

  }

}

?>