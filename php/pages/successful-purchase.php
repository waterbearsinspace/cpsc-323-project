<!doctype html>

<!-- Loads the html header -->
<?php
  require __DIR__ . "/../page-elements/html-head.php";
?>

<body>
  <!-- Displays the header -->
  <?php
    require __DIR__ . "/../page-elements/header/header.php";
  ?>

  Thank you for your purchase!

  <?php
      require __DIR__ . "/../sql/cart/generate-purchased.php";
  ?>

  <?php
    require __DIR__ . "/../sql/cart/purchase.php";

  ?>


</body>

</html>
