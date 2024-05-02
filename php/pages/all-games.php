<!doctype html>

<!-- Load the html header -->
<?php
  require __DIR__ . "/../page-elements/html-head.php";
?>

<body>
  <div class="content-wrap">
    <!-- Load header handler -->
    <?php
      require __DIR__ . "/../page-elements/header/header.php";
    ?>

    <!-- Get collection info -->

    <div class="games-title">ALL GAMES</div>

    <hr style="width:100%"/>

    <!-- Generate grid of games -->
    <?php
      require __DIR__ . "/../sql/game/generate-grid.php";
    ?>
  </div>

  <!-- Load footer -->
  <?php
    require __DIR__ . "/../page-elements/header/footer.php";
  ?>
</body>

</html>