<form action="/cpsc-332-project/php/pages/add-to-cart.php" method="post">
  <input type="hidden" name="UserID"
    name="UserID" value=<?= $_SESSION['id'] ?>
  >

  <input type="hidden" name="GameID"
    name="GameID" value=<?= $GameID ?>
  >

  <input class="numberInput" type="number" name="PurchaseQuantity"
    name="PurchaseQuantity" min="1" max=<?= $GameQuantity ?>
    value="1"
  >

  <input class="form-button cart-qty-button" type="submit" name="add-to-cart"
    value="Add to Cart"
  >
</form>