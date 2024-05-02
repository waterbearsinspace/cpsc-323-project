<?php
  // Connect to database
  require __DIR__ . "/../conn.php";

  // Prepare the SQL statement
  $generatePurchased = $mysqli->prepare("SELECT
    Products.ProductID,
    Products.ProductName,
    Products.ProductPrice,
    Products.ProductQuantity,
    Products.CoverURL,
    Carts.PurchaseQuantity
    FROM Products
    INNER JOIN Carts ON Products.ProductID = Carts.ProductID
    WHERE Carts.UserID = $_SESSION[id]
    ORDER BY ProductName ASC"
  );

  // Execute the SQL statement
  $generatePurchased->execute();
  $generatePurchased->store_result();

  // Check if the product exists
  if ($generatePurchased->num_rows > 0) {
    // Reset variables
    $ProductName = $CoverURL = "";
    $ProductID = $ProductPrice = $ProductQuantity = $PurchaseQuantity = 0;

    // Bind the result to variables
    $generatePurchased->bind_result(
      $ProductID, $ProductName, $ProductPrice,
      $ProductQuantity, $CoverURL, $PurchaseQuantity);

    // Fetch the result
    while($generatePurchased->fetch()) {
      // Generate cart game
      include __DIR__ . "/../../page-elements/cart/purchased-game.php";
    }
  }

  else {
    echo "Cart is empty!";
  }

  // Close the connection
  $generatePurchased->close();
  $mysqli->close();