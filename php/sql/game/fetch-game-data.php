<?php
    // Connect to database
    require __DIR__ . "/../conn.php";

  // Prepare and bind the SQL statement
  $fetchGameData = $mysqli->prepare(
    "SELECT
    GameName, GameDescription, GamePrice,
    GameQuantity, CoverURL,
    MinPlayers, MaxPlayers, PlayType
    FROM Games
    WHERE GameID = ?"
  );

  $fetchGameData->bind_param("i", $GameID);

  // Execute the SQL statement
  $fetchGameData->execute();
  $fetchGameData->store_result();

  // Check if the product exists
  if ($fetchGameData->num_rows > 0) {
    // Bind the result to variables
    $fetchGameData->bind_result(
      $GameName, $GameDescription,
      $GamePrice, $GameQuantity, $CoverURL,
      $MinPlayers, $MaxPlayers, $PlayType);

    // Fetch the result
    $fetchGameData->fetch();
  }

  else {
    echo "Game not found!";
  }

  // Close the connection
  $fetchGameData->close();
  $mysqli->close();