<?php

    // Source: sitepoint.com

    if (isset($_POST['register'])) { 

        // Connect to the database 
        $mysqli = new mysqli("localhost", "root", "", "cpsc_332_project"); 

        // Check for errors 
        if ($mysqli->connect_error) { die("Connection failed: " . $mysqli->connect_error); } 

        // Prepare and bind the SQL statement 
        $stmt = $mysqli->prepare("INSERT INTO users (Username, UserEmail, UserPassword) VALUES (?, ?, ?)"); $stmt->bind_param("sss", $username, $email, $password); 

        // Get the form data 
        $username = $_POST['username']; $email = $_POST['email']; $password = $_POST['password']; 

        // Hash the password 
        $password = password_hash($password, PASSWORD_DEFAULT); 

        // Execute the SQL statement 
        if ($stmt->execute()) {  
            // Get user ID
            $getID = $mysqli->prepare("SELECT UserID FROM Users WHERE Username = ?"); 
            $getID->bind_param("s", $username); 
            $getID->execute();
            $getID->store_result();
            $getID->bind_result($id);
            $getID->fetch();

            // Log the user in
            $_SESSION['loggedin'] = true; $_SESSION['id'] = $id; $_SESSION['username'] = $username; 

            // Redirect to home page
            header("Location: /index.php"); 
        } 

        else { echo "Error: " . $stmt->error; } 

        // Close the connection 
        $stmt->close(); $mysqli->close(); 
    }