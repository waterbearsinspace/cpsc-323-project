<?php

    // Connect to the database 
    $mysqli = new mysqli("localhost", "root", "", "cpsc_332_project"); 

    // Check for errors 
    if ($mysqli->connect_error) { die("Connection failed: " . $mysqli->connect_error); } 

    // Set ProductID
    $ProductID = "162886";

    // Prepare and bind the SQL statement 
    $stmt = $mysqli->prepare("SELECT ProductName, ProductDescription, ProductPrice, ProductQuantity, ImageURL
        FROM Products WHERE ProductID = ?"); $stmt->bind_param("s", $ProductID); 

    // Execute the SQL statement 
    $stmt->execute(); $stmt->store_result(); 

    // Check if the product exists 
    if ($stmt->num_rows > 0) { 
        // Bind the result to variables 
        $stmt->bind_result($ProductName, $ProductDescription, $ProductPrice, $ProductQuantity, $ImageURL); 

        // Fetch the result 
        $stmt->fetch(); 
        
        // Generate grid item
        include (__DIR__ . "/grid-item.php");
    }  else { echo "User not found!"; } 

    // Close the connection 
    $stmt->close(); $mysqli->close(); 
?>
