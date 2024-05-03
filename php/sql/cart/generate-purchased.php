<?php
  // Connect to database
  require __DIR__ . "/../conn.php";

  // Prepare the SQL statement
  $generatePurchased = $mysqli->prepare("SELECT
    Games.GameID,
    Games.GameName,
    Games.GamePrice,
    Games.GameQuantity,
    Games.CoverURL,
    Carts.PurchaseQuantity
    FROM Games
    INNER JOIN Carts ON Games.GameID = Carts.GameID
    WHERE Carts.UserID = $_SESSION[id]
    ORDER BY GameName ASC"
  );

  // Execute the SQL statement
  $generatePurchased->execute();
  $generatePurchased->store_result();

  // Check if the product exists
  if ($generatePurchased->num_rows > 0) {
    // Reset variables
    $GameName = $CoverURL = "";
    $GameID = $GamePrice = $GameQuantity = $PurchaseQuantity = 0;

    // Bind the result to variables
    $generatePurchased->bind_result(
      $GameID, $GameName, $GamePrice,
      $GameQuantity, $CoverURL, $PurchaseQuantity);

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