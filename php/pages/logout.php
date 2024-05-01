<!doctype html>

<!-- Loads the html header -->
<?php
  require __DIR__ . "/../page-elements/html-head.php";
?>

<body>
  <div class="content-wrap">
    <!-- Logs the user out -->
    <?php
      require __DIR__ . "/../sql/user-account/logout.php";
    ?>

    <!-- Displays the header -->
    <?php
      require __DIR__ . "/../page-elements/header/header.php";
    ?>

    You have been logged out.
  </div>

  <!-- Load footer -->
  <?php
    require __DIR__ . "/../page-elements/header/footer.php";
  ?>
</body>

</html>
