<?php
  // Connect to the database
  $mysqli = new mysqli("localhost", "root", "", "cpsc_332_project");

  // Check for errors
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }

  // Prepare and bind the SQL statement
  $stmt = $mysqli->prepare(
    "SELECT
    ProductName, ProductDescription, ProductPrice,
    ProductQuantity, CoverURL
    FROM Products
    WHERE ProductID = ?"
  );

  $stmt->bind_param("i", $ProductID);

  // Execute the SQL statement
  $stmt->execute();
  $stmt->store_result();

  // Check if the product exists
  if ($stmt->num_rows > 0) {
    // Bind the result to variables
    $stmt->bind_result(
      $ProductName, $ProductDescription,
      $ProductPrice, $ProductQuantity, $CoverURL);

    // Fetch the result
    $stmt->fetch();
  }

  else {
    echo "Product not found!";
  }