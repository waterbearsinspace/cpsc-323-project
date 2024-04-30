<form action="/cpsc-332-project/php/pages/add-to-cart.php" method="post">
  <input type="hidden" name="UserID"
    name="UserID" value=<?= $_SESSION['id'] ?>
  >

  <input type="hidden" name="ProductID"
    name="ProductID" value=<?= $ProductID ?>
  >

  <input type="number" name="PurchaseQuantity"
    name="PurchaseQuantity" min="1" max=<?= $ProductQuantity ?>
    value="1"
  >

  <input type="submit" name="add-to-cart"
    value="Add to Cart"
  >
</form>