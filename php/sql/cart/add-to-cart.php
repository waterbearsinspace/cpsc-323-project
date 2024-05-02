<?php
  if (isset($_POST['add-to-cart'])) {
    // Connect to database
    require __DIR__ . "/../conn.php";

    // Get the form data
    $UserID = $_POST['UserID'];
    $ProductID = $_POST['ProductID'];
    $PurchaseQuantity = $_POST['PurchaseQuantity'];

    // Check if item exists in user's cart
    $exists = $mysqli->prepare(
      "SELECT *
      FROM carts
      WHERE UserID = ? AND ProductID = ?
      LIMIT 1"
    );
    $exists->bind_param("ii", $UserID, $ProductID);
    $exists->execute();
    $exists->store_result();

    // Prepare add to cart
    $addToCart = $mysqli->prepare(
      "INSERT INTO carts (UserID, ProductID, PurchaseQuantity)
      VALUES (?, ?, ?)"
    );
    $addToCart->bind_param("iii", $UserID, $ProductID, $PurchaseQuantity);

    // Prepare update cart
    $updateCart = $mysqli->prepare(
      "UPDATE carts
      SET PurchaseQuantity =  PurchaseQuantity + ?
      WHERE UserID=? AND ProductID = ?"
    );
    $updateCart->bind_param("iii", $PurchaseQuantity, $UserID, $ProductID);

    if($exists->num_rows >= 1) {
      $updateCart->execute();
      header("Location: /cpsc-332-project/php/pages/cart.php");
    }

    else {
      $addToCart->execute();
      header("Location: /cpsc-332-project/php/pages/cart.php");
    }

    // Close the connection
    $exists->close();
    $addToCart->close();
    $updateCart->close();
    $mysqli->close();
  }