<?php
  // Connect to database
  require __DIR__ . "/../conn.php";

  $generateNavbarLinks = $mysqli->prepare(
    "SELECT
    CollectionID, CollectionName
    FROM Collection_Info
    ORDER BY CollectionID ASC"
  );

  // Execute the SQL statement
  $generateNavbarLinks->execute();
  $generateNavbarLinks->store_result();

  // Check if the product exists
  if ($generateNavbarLinks->num_rows > 0) {
    // Bind the result to variable
    $generateNavbarLinks->bind_result(
      $navbarID, $navbarName
    );

    // Fetch the result
    while($generateNavbarLinks->fetch()) {
      // Generate grid game
      include (__DIR__ . "/../../page-elements/navigation/navbar-link.php");
    }
  }

  else {
    echo "Collection not found!";
  }

  // Close the connection
  $generateNavbarLinks->close();
  $mysqli->close();
?>