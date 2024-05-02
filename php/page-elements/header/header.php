<?php
  session_start();

  // Serves different headers depending on whether the user is logged in or not
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    require_once __DIR__ . "/header-logged.php";
    require_once __DIR__ . "/../navigation/navigation.php";
  }
  else {
    require_once __DIR__ . "/header-unlogged.php";
    require_once __DIR__ . "/../navigation/navigation.php";
  }

