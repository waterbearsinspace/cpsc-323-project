<?php
    $GameURL="/cpsc-332-project/php/pages/game.php?ID=" . $ProductID;
?>

<div class="cart-game-container">
  <div class="cart-game-cover-container">
    <a href=<?= $GameURL ?>>
      <img class="cart-game-cover" src=<?= $CoverURL ?>>
    </a>
  </div>

  <div class="cart-purchase-info-container">
    <a href=<?= $GameURL ?> class="cart-game-name">
      <?= $ProductName ?>
    </a>
    <div class="cart-price">
      $<?= $ProductPrice ?>
    </div>
  </div>

  <div class="cart-purchase-info-container">
    <a href=<?= $GameURL ?> class="cart-game-name">
      <?= $ProductName ?>
    </a>
    <div class="cart-price">
      $<?= $ProductPrice ?>
    </div>
  </div>

  <?php
    include __DIR__ . "/../game/edit-cart-button.php";
  ?>
</div>