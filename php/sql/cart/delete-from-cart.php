<?php
  if (isset($_POST['delete-from-cart'])) {
    // Connect to the database
    $mysqli = new mysqli("localhost", "root", "", "cpsc_332_project");

    // Check for errors
    if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
    }

    // Get the form data
    $UserID = $_POST['UserID'];
    $ProductID = $_POST['ProductID'];

    // Prepare delete from cart
    $deleteFromCart = $mysqli->prepare(
      "DELETE FROM carts
      WHERE UserID = ?
      AND ProductID = ?"
      );
    $deleteFromCart->bind_param("ii", $UserID, $ProductID);

    // Update cart
    $deleteFromCart->execute();

    // Redirect to the cart
    header("Location: /cpsc-332-project/php/pages/cart.php");

    // Close the connection
    $mysqli->close();
  }