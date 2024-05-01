<?php
  if (isset($_POST['purchase'])) {
    // Connect to the database
    $mysqli = new mysqli("localhost", "root", "", "cpsc_332_project");

    // Check for errors
    if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
    }

    // Get the form data
    $UserID = $_POST['UserID'];

    // Prepare "purchase"
    $purchase = $mysqli->prepare(
      "UPDATE Products P, Carts C
      SET P.ProductQuantity =
        P.ProductQuantity - C.PurchaseQuantity
      WHERE P.ProductID = C.ProductID
      AND C.UserID = ?"
      );
    $purchase->bind_param("i", $UserID);

    // Remove from cart
    $removeFromCart = $mysqli->prepare(
      "DELETE FROM carts
      WHERE UserID = ?"
    );
    $removeFromCart->bind_param("i", $UserID);

    // Update cart
    $purchase->execute();
    $removeFromCart->execute();

    // Close the connection
    $mysqli->close();
  }