
<!doctype html>

<!-- Loads the html header -->
<?php
  require_once (__DIR__ . "/php/page-elements/html-head.php");
?>

<body>

  <!-- Displays the header -->
  <?php
    require_once(__DIR__ . "/php/page-elements/header/header.php");
  ?>

  GAMES
  
  <div class="grid-game-container-container">
    <?php
      include (__DIR__ . "/php/sql/game/generate-grid.php");
    ?>
  </div>

</body>

</html>
