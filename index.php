<!doctype html>

<!-- Load the html header -->
<?php
  require __DIR__ . "/php/page-elements/html-head.php";
?>

<body>
  <!-- Load header handler -->
  <?php
    require __DIR__ . "/php/page-elements/header/header.php";
  ?>

  GAMES

  <!-- Generate grid of games -->
  <div class="grid-game-container-container">
    <?php
      require __DIR__ . "/php/sql/game/generate-grid.php";
    ?>
  </div>
</body>

</html>