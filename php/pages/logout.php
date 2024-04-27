<!doctype html>

<!-- Loads the html header -->
<?php
  require_once __DIR__ . "/../page-elements/html-head.php";
?>

<body>

  <!-- Logs the user out -->
  <?php
    require_once __DIR__ . "/../sql/logout.php";
  ?>

  <!-- Displays the header -->
  <?php
    require_once __DIR__ . "/../page-elements/header/header.php";
  ?>

  You have been logged out.

  <!-- NOTE: Alternatively, we can redirect straight to the homepage from sql/logout.php -->

</body>

</html>
