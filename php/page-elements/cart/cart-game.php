<?php
    $GameURL="/cpsc-332-project/php/pages/game.php?ID=" . $ProductID;
?>

<hr style="width: 100%">

<div class="cart-game-container">
  <div class="cart-game-cover-container">
    <img class="cart-game-cover" src=<?= $CoverURL ?>>
  </div>

  <a href=<?= $GameURL ?> class="cart-game-name">
    <?= $ProductName ?>
  </a>

  <div class="cart-price">
    $<?= $ProductPrice ?>
  </div>

  <?php
    include __DIR__ . "/../game/edit-cart-button.php";
  ?>

  <?php
    include __DIR__ . "/../game/delete-from-cart-button.php";
  ?>
</div>