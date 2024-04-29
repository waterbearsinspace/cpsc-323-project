<?php
    $GameURL="/cpsc-332-project/php/pages/game.php?ID=" . $ProductID;
?>

<div class="grid-game-container">

    <div class="grid-game-cover-container">
        <a href=<?= $GameURL ?>><img class="grid-game-cover" src=<?= $CoverURL ?>></a>
    </div> 
    
    <hr style="width:100%"/>

    <div class="grid-purchase-info-container"> 
        <div class="grid-game-name"><?= $ProductName ?></div>
        <div class="grid-price"><div>$</div><div><?= $ProductPrice ?></div></div>
    </div>
</div>