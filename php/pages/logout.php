<!doctype html>

<!-- Loads the html header -->
<?php
  require __DIR__ . "/../page-elements/html-head.php";
?>

<body>
  <!-- Logs the user out -->
  <?php
    require __DIR__ . "/../sql/user-account/logout.php";
  ?>

  <!-- Displays the header -->
  <?php
    require __DIR__ . "/../page-elements/header/header.php";
  ?>

  You have been logged out.

</body>

</html>
