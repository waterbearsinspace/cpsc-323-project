
<!doctype html>

<!-- Loads the html header -->
<?php
  require_once (__DIR__ . "/../page-elements/html-head.php");
?>

<body>

  <!-- Displays the header -->
  <?php
    require_once(__DIR__ . "/../page-elements/header/header.php");
  ?>

  <!-- Fetch data -->
  <?php

    $ProductID=$_GET['ID'];

    include (__DIR__ . "/../sql/game/fetch-game-data.php");

    $ProductDescription = str_replace("\n", '<br>', $ProductDescription)
  ?>

  <div class="page-game-container-container">
    <div class="page-game-name"><?= $ProductName ?></div>
    <div class="page-game-cover-container"><img class="page-game-cover" src=<?= $CoverURL ?>></div>
    <div class="page-game-description"><?= $ProductDescription ?></div>
    <div class="page-game-price">$<?= $ProductPrice ?></div>
    <div class="page-game-quantity"><?= $ProductQuantity ?></div>
  </div>

  <br />

  <form action="/cpsc-332-project/php/pages/add-to-cart.php" method="post">
    <input type="hidden" name="UserID" name="UserID" value=<?= $_SESSION['id'] ?>>
    <input type="hidden" name="ProductID" name="ProductID" value=<?= $ProductID ?>>
    <input type="number" name="PurchaseQuantity" name="PurchaseQuantity" min="1" max=<?= $ProductQuantity ?> value="1">
    <input type="submit" name="add-to-cart" value="Add to Cart">
  </form>

</body>

</html>
