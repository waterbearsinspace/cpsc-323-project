<?php
  if (isset($_POST['purchase'])) {
    // Connect to database
    require __DIR__ . "/../conn.php";

    // Get the form data
    $UserID = $_POST['UserID'];

    // Prepare "purchase"
    $purchase = $mysqli->prepare(
      "UPDATE Games P, Carts C
      SET P.GameQuantity =
        P.GameQuantity - C.PurchaseQuantity
      WHERE P.GameID = C.GameID
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
    $purchase->close();
    $removeFromCart->close();
    $mysqli->close();
  }