<?php
  if (isset($_POST['update-cart'])) {
    // Connect to database
    require __DIR__ . "/../conn.php";

    // Get the form data
    $UserID = $_POST['UserID'];
    $GameID = $_POST['GameID'];
    $PurchaseQuantity = $_POST['PurchaseQuantity'];

    // Prepare update cart
    $updateCart = $mysqli->prepare(
      "UPDATE carts SET PurchaseQuantity =  ?
      WHERE UserID = ? AND GameID = ?"
      );
    $updateCart->bind_param("iii", $PurchaseQuantity, $UserID, $GameID);

    // Prepare delete zero
    $deleteZeroQuantity = $mysqli->prepare(
      "DELETE FROM carts
      WHERE UserID = ?
      AND PurchaseQuantity = 0"
    );
    $deleteZeroQuantity->bind_param("i", $UserID);

    // Update cart
    $updateCart->execute();
    $deleteZeroQuantity->execute();

    // Redirect to the cart
    header("Location: /cpsc-332-project/php/pages/cart.php");

    // Close the connection
    $updateCart->close();
    $deleteZeroQuantity->close();
    $mysqli->close();
  }