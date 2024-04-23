<?php

  session_start();

  // Serves different headers depending on whether the user is logged in or not  
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    require_once "header-logged.php";
  } 
  else {
    require_once "header-unlogged.php";
  }

?>

