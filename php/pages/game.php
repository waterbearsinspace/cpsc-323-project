
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

    include (__DIR__ . "/../sql/fetch-game-data.php");

    $ProductDescription = str_replace("\n", '<br>', $ProductDescription)
  ?>

  <div class="page-game-container-container">
    <div class="page-game-name"><?= $ProductName ?></div>
    <div class="page-game-cover-container"><img class="page-game-cover" src=<?= $CoverURL ?>></div>
    <div class="page-game-description"><?= $ProductDescription ?></div>
    <div class="page-game-price">$<?= $ProductPrice ?></div>
    <div class="page-game-quantity"><?= $ProductQuantity ?></div>
  </div>

</body>

</html>