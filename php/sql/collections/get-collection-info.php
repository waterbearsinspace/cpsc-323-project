<?php

  // Connect to the database
  $mysqli = new mysqli("localhost", "root", "", "cpsc_332_project");

  // Check for errors
  if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
  }

  // Prepare and bind the SQL statement
  if ($CollectionID != "all-games") {
    $stmt = $mysqli->prepare(
        "SELECT
        CollectionName, CollectionDescription
        FROM Collections
        WHERE CollectionID = ?"
    );

    $stmt->bind_param("i", $CollectionID);
    
    // Execute the SQL statement
    $stmt->execute();
    $stmt->store_result();

      // Bind the result to variables
    $stmt->bind_result(
      $CollectionName, $CollectionDescription
    );
  }
