<div class="collection-container">

<?php
  // Connect to database
  require __DIR__ . "/../conn.php";

  $generateGrid = $mysqli->prepare("SELECT
    CollectionName,
    CollectionDescription
    FROM collection_info
    ORDER BY CollectionName ASC"
  );


  // Execute the SQL statement
  $generateGrid->execute();
  $generateGrid->store_result();

  // Check if the game exists
  if ($generateGrid->num_rows > 0) {
    // Reset variables
    $collectionName =
    $collectionDescription = "";

    // Bind the result to variables
    $generateGrid->bind_result(
      $collectionName,
      $collectionDescription
    );

    // Fetch the result
    while($generateGrid->fetch()) {
      // Generate grid game
      include (__DIR__ . "/../../page-elements/collections/collection-item.php");
    }
  }

  else {
    echo "Game not found!";
  }

  // Close the connection
  $generateGrid->close();
  $mysqli->close();
?>

</div>