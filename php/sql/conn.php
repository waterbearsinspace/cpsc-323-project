<?php
// Connect to the database
  $mysqli = new mysqli("localhost", "root", "", "cpsc_332_project");

  // Check for errors
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }