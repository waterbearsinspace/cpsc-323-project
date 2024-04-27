<?php
    $itemName = "this is the name of an item it is very cool";
    $itemPrice = 180;
?>

<div class="item-container">

    <img class="item-image" src="https://media-assets.grailed.com/prd/listing/temp/dae8f4677a6643249b26e5adfb828ea6?w=240">

    <div class="item-name"><?= $itemName ?></div>
    <div class="purchase-info-container">
        <div class="price"><div>$</div><div><?= $itemPrice ?>   </div></div>
        <div class="to-cart">♥</div>
    </div>
</div>