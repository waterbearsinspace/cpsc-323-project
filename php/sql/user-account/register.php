<?php
  // Source: sitepoint.com

  if (isset($_POST["register"])) {
    // Connect to database
    require __DIR__ . "/../conn.php";

    // Prepare and bind the SQL statement
    $register = $mysqli->prepare(
      "INSERT INTO users (Username, UserEmail, UserPassword)
      VALUES (?, ?, ?)"
    );
    $register->bind_param("sss", $username, $email, $password);

    // Get the form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Execute the SQL statement
    if ($register->execute()) {
      // Get user ID
      $getID = $mysqli->prepare(
        "SELECT UserID
        FROM Users
        WHERE Username = ?"
      );
      $getID->bind_param("s", $username);
      $getID->execute();
      $getID->store_result();
      $getID->bind_result($id);
      $getID->fetch();

      // Log the user in
      $_SESSION["loggedin"] = true;
      $_SESSION["id"] = $id;
      $_SESSION["username"] = $username;

      // Redirect to home page
      header("Location: /index.php");
    }

    else {
      echo "Error: " . $register->error;
    }

    // Close the connection
    $register->close();
    $mysqli->close();
  }