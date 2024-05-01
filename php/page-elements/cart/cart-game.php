<?php
    $GameURL="/cpsc-332-project/php/pages/game.php?ID=" . $ProductID;
?>

<div class="cart-game-container">
  <div class="cart-game-cover-container">
    <img class="cart-game-cover" src=<?= $CoverURL ?>>
  </div>

  <div class="cart-game-info-container">
    <a href=<?= $GameURL ?> class="cart-game-name">
      <?= $ProductName ?>
    </a>

    <div class="cart-price">
      $<?= $ProductPrice ?>
    </div>

    <div class="edit-cart-button-container">
      <?php
        include __DIR__ . "/../cart/edit-cart-button.php";
      ?>
    </div>

    <div class="delete-button-container">
      <?php
        include __DIR__ . "/../cart/delete-from-cart-button.php";
      ?>
    </div>
  </div>
</div>

<hr style="width: 100%">