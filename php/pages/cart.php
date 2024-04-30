<!doctype html>

<!-- Loads the html header -->
<?php
  require_once __DIR__ . "/../page-elements/html-head.php";
?>

<body>

  <!-- Displays the header -->
  <?php
  require_once __DIR__ . "/../page-elements/header/header.php";
  ?>

  CART

  <div class="cart-game-container-container">
    <?php
    require_once __DIR__ . "/../page-elements/cart/generate-cart.php";
    ?>
  </div>

</body>

</html>
