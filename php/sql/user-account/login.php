<?php
  // Source: sitepoint.com

  if (isset($_POST['login'])) {
    // Connect to database
    require __DIR__ . "/../conn.php";

    // Prepare and bind the SQL statement
    $login = $mysqli->prepare(
      "SELECT UserID, UserPassword
      FROM Users
      WHERE Username = ?"
    );
    $login->bind_param("s", $username);

    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Execute the SQL statement
    $login->execute();
    $login->store_result();

    // Check if the user exists
    if ($login->num_rows > 0) {
      // Bind the result to variables
      $login->bind_result($id, $hashed_password);

      // Fetch the result
      $login->fetch();

      // Verify the password
      if (password_verify($password, $hashed_password)) {
        // Set the session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;

        // Redirect to home page
        header("Location: /index.php");
        exit;
      }

      else {
        echo "Incorrect password!";
      }

    }

    else {
      echo "User not found!";
    }

    // Close the connection
    $login->close();
    $mysqli->close();
  }