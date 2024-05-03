<?php
    $GameURL="/cpsc-332-project/php/pages/game.php?ID=" . $GameID;
?>

<div class="grid-game-container">
  <div class="grid-game-cover-container">
    <a href=<?= $GameURL ?>>
      <img class="grid-game-cover" src=<?= $CoverURL ?>>
    </a>
  </div>

  <hr style="width:100%"/>

  <div class="grid-purchase-info-container">
    <a href=<?= $GameURL ?> class="grid-game-name">
      <?= $GameName ?>
    </a>
    <div>
      $<?= $GamePrice ?>
    </div>
  </div>
</div>