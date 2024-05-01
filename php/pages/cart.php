<!doctype html>

<!-- Load the html header -->
<?php
  require __DIR__ . "/../page-elements/html-head.php";
?>

<body>
  <div class="content-wrap">
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
    </div>

  </div>

  <!-- Load footer -->
  <?php
      require __DIR__ . "/../page-elements/header/footer.php";
    ?>
</body>

</html>
