<!doctype html>

<?php
  require_once "../page-elements/html-head.php";
?>

<body>

  <!-- Logs the user out -->
  <?php
    require_once "../sql/logout.php";
  ?>

  <!-- Displays the header -->
  <?php
    require_once "../page-elements/header.php";
  ?>

  You have been logged out.

  <!-- NOTE: Alternatively, we can redirect straight to the homepage from sql/logout.php -->

</body>

</html>
