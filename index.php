<!doctype html>

<!-- Load the html header -->
<?php
  require __DIR__ . "/php/page-elements/html-head.php";
?>

<body>
  <div class="content-wrap">
    <!-- Load header handler -->
    <?php
      require __DIR__ . "/php/page-elements/header/header.php";

      require __DIR__ . "/php/page-elements/banner/banner.php";

      // require __DIR__ . "/php/sql/collections/generate-collection-grid.php";

      require __DIR__ . "/php/page-elements/header/footer.php";
    ?>
  </div>

  <!-- Load footer -->

</body>

</html>