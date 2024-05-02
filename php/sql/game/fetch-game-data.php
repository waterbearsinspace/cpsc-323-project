<?php
    // Connect to database
    require __DIR__ . "/../conn.php";

  // Prepare and bind the SQL statement
  $fetchGameData = $mysqli->prepare(
    "SELECT
    ProductName, ProductDescription, ProductPrice,
    ProductQuantity, CoverURL,
    MinPlayers, MaxPlayers, PlayType
    FROM Products
    WHERE ProductID = ?"
  );

  $fetchGameData->bind_param("i", $ProductID);

  // Execute the SQL statement
  $fetchGameData->execute();
  $fetchGameData->store_result();

  // Check if the product exists
  if ($fetchGameData->num_rows > 0) {
    // Bind the result to variables
    $fetchGameData->bind_result(
      $ProductName, $ProductDescription,
      $ProductPrice, $ProductQuantity, $CoverURL,
      $MinPlayers, $MaxPlayers, $PlayType);

    // Fetch the result
    $fetchGameData->fetch();
  }

  else {
    echo "Product not found!";
  }

  // Close the connection
  $fetchGameData->close();
  $mysqli->close();