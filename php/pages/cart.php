<!doctype html>

<!-- Load the html header -->
<?php
  require __DIR__ . "/../page-elements/html-head.php";
?>

<body>
  <!-- Display the header -->
  <?php
    require __DIR__ . "/../page-elements/header/header.php";
  ?>

  CART

  <!-- Display all games in user's cart -->
  <div class="cart-game-container-container">
    <?php
      require __DIR__ . "/../sql/cart/generate-cart.php";
    ?>
  </div>
</body>

</html>
