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

  <div class="cart-title">CART</div>

  <hr style="width:100%"/>

  <!-- Display all games in user's cart -->
  <div class="cart-game-container-container">
    <?php
      require __DIR__ . "/../sql/cart/generate-cart.php";
    ?>

    <!-- Purchase button -->
    <?php
      include __DIR__ . "/../page-elements/cart/purchase-button.php";
    ?>
  </div>

</body>

</html>
