<?php
    $GameURL="/cpsc-332-project/php/pages/game.php?ID=" . $ProductID;
?>

<div class="purchased-game-container">
  <div class="purchased-game-cover-container">
    <img class="purchased-game-cover" src=<?= $CoverURL ?>>
  </div>

  <div class="purchased-game-info-container">
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
</div>

<hr style="width: 100%">