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

    <!-- Load header handler -->
    <?php
      require __DIR__ . "/../page-elements/header/header.php";
    ?>

    <div style="margin-top: 16px;">You have been logged out.</div>

  </div>

  <!-- Load footer -->
  <?php
    require __DIR__ . "/../page-elements/header/footer.php";
  ?>
</body>

</html>
