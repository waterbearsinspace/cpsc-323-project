<?php
  if (isset($_POST['delete-from-cart'])) {
    // Connect to database
    require __DIR__ . "/../conn.php";

    // Check for errors
    if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
    }

    // Get the form data
    $UserID = $_POST['UserID'];
    $GameID = $_POST['GameID'];

    // Prepare delete from cart
    $deleteFromCart = $mysqli->prepare(
      "DELETE FROM carts
      WHERE UserID = ?
      AND GameID = ?"
      );
    $deleteFromCart->bind_param("ii", $UserID, $GameID);

    // Update cart
    $deleteFromCart->execute();

    // Redirect to the cart
    header("Location: /cpsc-332-project/php/pages/cart.php");

    // Close the connection
    $deleteFromCart->close();
    $mysqli->close();
  }