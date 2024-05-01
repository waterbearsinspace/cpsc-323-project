<?php
    $GameURL="/cpsc-332-project/php/pages/game.php?ID=" . $ProductID;
?>

<hr style="width: 100%">

<div class="cart-game-container">
  <div class="cart-game-cover-container">
    <img class="cart-game-cover" src=<?= $CoverURL ?>>
  </div>

  <a href=<?= $GameURL ?> class="purchased-game-name">
    <?= $ProductName ?>
  </a>

  <div class="purchased-price">
    $<?= $ProductPrice ?>
  </div>

  <div class="purchased-quantity">
    <?= $PurchaseQuantity ?>
  </div>
</div>