<!doctype html>

<!-- Loads the html header -->
<?php
  require __DIR__ . "/../page-elements/html-head.php";
?>

<body>
  <div class="content-wrap">
    <!-- Displays the header -->
    <?php
      require __DIR__ . "/../page-elements/header/header.php";
    ?>

    <div class="thank-you">THANK YOU FOR YOUR PURCHASE OF THE FOLLOWING:</div>

    <hr style="width:100%"/>

    <!-- Displays all games in user's cart -->
    <div class="cart-game-container-container">
      <?php
        require __DIR__ . "/../sql/cart/generate-purchased.php";
      ?>

      <?php
        require __DIR__ . "/../sql/cart/purchase.php";
      ?>
    </div>
  </div>

  <!-- Load footer -->
  <?php
    require __DIR__ . "/../page-elements/header/footer.php";
  ?>
</body>

</html>
