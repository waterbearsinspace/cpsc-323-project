<div class="purchase-button-container">
  <form action="/cpsc-332-project/php/pages/successful-purchase.php" method="post">
    <input type="hidden" name="UserID"
      name="UserID" value=<?= $_SESSION['id'] ?>
    >

    <input class="form-button purchase-button" type="submit" name="purchase"
      value="Purchase"
    >
  </form>
</div>