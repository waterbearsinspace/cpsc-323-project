<div class="grid-game-container-container">

<?php
  // Connect to database
  require __DIR__ . "/../conn.php";


  // Prepare the SQL statement
    if($CollectionID!="all-games") {
      $generateGrid = $mysqli->prepare("SELECT
      Products.ProductID,
      Products.ProductName,
      Products.ProductDescription,
      Products.ProductPrice,
      Products.ProductQuantity,
      Products.CoverURL
      FROM Products
      INNER JOIN collection_products ON collection_products.ProductID = products.ProductID
      WHERE collection_products.CollectionID = ?
      ORDER BY ProductName ASC"
      );

      $generateGrid->bind_param("s", $CollectionID);
    }

    else {
      $generateGrid = $mysqli->prepare(
        "SELECT
        ProductID, ProductName, ProductDescription,
        ProductPrice, ProductQuantity, CoverURL
        FROM Products
        ORDER BY ProductName ASC"
    );
    }

  // Execute the SQL statement
  $generateGrid->execute();
  $generateGrid->store_result();

  // Check if the product exists
  if ($generateGrid->num_rows > 0) {
    // Reset variables
    $ProductName = $ProductDescription = $CoverURL = "";
    $ProductID = $ProductPrice = $ProductQuantity = 0;

    // Bind the result to variables
    $generateGrid->bind_result(
      $ProductID, $ProductName, $ProductDescription,
      $ProductPrice, $ProductQuantity, $CoverURL
    );

    // Fetch the result
    while($generateGrid->fetch()) {
      // Generate grid game
      include (__DIR__ . "/../../page-elements/grid/grid-game.php");
    }
  }

  else {
    echo "Product not found!";
  }

  // Close the connection
  $generateGrid->close();
  $mysqli->close();
?>

</div>