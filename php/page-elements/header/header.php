<?php

  session_start();

  // Serves different headers depending on whether the user is logged in or not  
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    require_once (__DIR__ . "/header-logged.php");
  } 
  else {
    require_once (__DIR__ . "/header-unlogged.php");
  }

?>

