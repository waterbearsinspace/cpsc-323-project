<form action="/cpsc-332-project/php/pages/delete-from-cart.php" method="post">
  <input type="hidden" name="UserID"
    name="UserID" value=<?= $_SESSION['id'] ?>
  >
  <input type="hidden" name="GameID"
    name="GameID" value=<?= $GameID ?>
  >

  <button class="delete-button" type="submit" name="delete-from-cart">
    <img class="delete-button-image" src="/cpsc-332-project/img/delete.png" alt="submit">
  </button>
</form>