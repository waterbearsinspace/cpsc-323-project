
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

  
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      include (__DIR__ . "/../page-elements/game/add-to-cart-button.php");
    }
    else {
      include (__DIR__ . "/../page-elements/game/please-log-in.php");
    }
    ?>

</body>

</html>
