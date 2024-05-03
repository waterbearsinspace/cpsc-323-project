<div class="grid-game-container-container">

<?php
  // Connect to database
  require __DIR__ . "/../conn.php";


  // Prepare the SQL statement
    if($CollectionID!="all-games") {
      $generateGrid = $mysqli->prepare("SELECT
      Games.GameID,
      Games.GameName,
      Games.GameDescription,
      Games.GamePrice,
      Games.GameQuantity,
      Games.CoverURL
      FROM Games
      INNER JOIN collection_products ON collection_products.GameID = products.GameID
      WHERE collection_products.CollectionID = ?
      ORDER BY GameName ASC"
      );

      $generateGrid->bind_param("s", $CollectionID);
    }

    else {
      $generateGrid = $mysqli->prepare(
        "SELECT
        GameID, GameName, GameDescription,
        GamePrice, GameQuantity, CoverURL
        FROM Games
        ORDER BY GameName ASC"
    );
    }

  // Execute the SQL statement
  $generateGrid->execute();
  $generateGrid->store_result();

  // Check if the product exists
  if ($generateGrid->num_rows > 0) {
    // Reset variables
    $GameName = $GameDescription = $CoverURL = "";
    $GameID = $GamePrice = $GameQuantity = 0;

    // Bind the result to variables
    $generateGrid->bind_result(
      $GameID, $GameName, $GameDescription,
      $GamePrice, $GameQuantity, $CoverURL
    );

    // Fetch the result
    while($generateGrid->fetch()) {
      // Generate grid game
      include (__DIR__ . "/../../page-elements/grid/grid-game.php");
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