<?php
  // Connect to database
  require __DIR__ . "/../conn.php";

  // Prepare and bind the SQL statement
  if ($CollectionID != "all-games") {
    $getCollectionInfo = $mysqli->prepare(
        "SELECT
        CollectionName, CollectionDescription
        FROM collection_info
        WHERE CollectionID = ?"
    );

    $getCollectionInfo->bind_param("i", $CollectionID);
    
    // Execute the SQL statement
    $getCollectionInfo->execute();
    $getCollectionInfo->store_result();

    // Bind the result to variables
    $getCollectionInfo->bind_result(
      $CollectionName, $CollectionDescription
    );
    
    $getCollectionInfo->close();
  }

  else {
    $CollectionName="All Games";
    $CollectionDescription="Browse all available games.";
  }

  // Close the connection
  $mysqli->close();