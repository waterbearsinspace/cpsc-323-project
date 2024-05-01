<?php
  // Connect to the database
  $mysqli = new mysqli("localhost", "root", "", "cpsc_332_project");

  // Check for errors
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }

  // Prepare the SQL statement
  $stmt = $mysqli->prepare("SELECT
    Products.ProductID,
    Products.ProductName,
    Products.ProductDescription,
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
  $stmt->execute();
  $stmt->store_result();

  // Check if the product exists
  if ($stmt->num_rows > 0) {
    // Reset variables
    $ProductName = $ProductDescription = $CoverURL = "";
    $ProductID = $ProductPrice = $ProductQuantity = $PurchaseQuantity = 0;

    // Bind the result to variables
    $stmt->bind_result(
      $ProductID, $ProductName, $ProductDescription,
      $ProductPrice, $ProductQuantity, $CoverURL, $PurchaseQuantity);

    // Fetch the result
    while($stmt->fetch()) {
      // Generate grid game
      include __DIR__ . "/../../page-elements/cart/cart-game.php";
    }
  }

  else {
    echo "Cart is empty!";
  }

  // Close the connection
  $stmt->close();
  $mysqli->close();