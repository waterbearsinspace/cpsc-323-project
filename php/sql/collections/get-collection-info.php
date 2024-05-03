<?php
  // Connect to database
  require __DIR__ . "/../conn.php";

  // Prepare and bind the SQL statement
  if ($collectionID != "all-games") {
    $getCollectionInfo = $mysqli->prepare(
        "SELECT
        CollectionName, CollectionDescription
        FROM collection_info
        WHERE CollectionID = ?"
    );

    $getCollectionInfo->bind_param("s", $collectionID);

    // Execute the SQL statement
    $getCollectionInfo->execute();
    $result = $getCollectionInfo->get_result();

    // Get the results
    $collectionInfo = $result->fetch_assoc();
    $collectionName = $collectionInfo["CollectionName"];
    $collectionDescription = $collectionInfo["CollectionDescription"];
  }

  else {
    $collectionName="All Games";
    $collectionDescription="Browse all available games.";
  }

  // Close the connection
  $mysqli->close();