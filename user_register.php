<?php

// Create the form
echo <<<HTML
<form action="/register" method="post">
  <input type="text" name="username" placeholder="Username">
  <input type="email" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" value="Register">
</form>
HTML;

// Check if the form has been submitted
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

  // Validate the form data
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check if the username already exists
  $user = $db->query("SELECT * FROM users WHERE username = '$username'");

  if ($user->num_rows > 0) {

    // The username already exists
    echo "Username already exists";

  } else {

    // The username does not exist
    // Insert the new user into the database
    $db->query("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");

    // The user has been registered
    echo "You have been registered successfully";

  }

}

?>