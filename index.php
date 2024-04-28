
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

  <div class="item-container-container">
    <?php
      include (__DIR__ . "/php/sql/generate-grid.php");
    ?>
  </div>

</body>

</html>
