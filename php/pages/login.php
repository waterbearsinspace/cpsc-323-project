<!doctype html>

<!-- Loads the html header -->
<?php
  require __DIR__ . "/../page-elements/html-head.php";
?>

<body>
  <div class="content-wrap">
    <!-- Displays the header -->
    <?php
      require __DIR__ . "/../page-elements/header/header.php";
    ?>

    <!-- Login form-->
    <?php
      require __DIR__ . "/../sql/user-account/login.php";
    ?>

    <div class="form-container">
      <form class="user-form" action="login.php" method="post">
        <div class="form-content">
          <label for="username">
            Username:
          </label>
          <input id="username" name="username"
            required="" type="text" />

          <label for="password">
            Password:
          </label>
          <input id="password" name="password"
            required="" type="password" />

          <input class="form-button" name="login"
            type="submit" value="Log In" />
        </div>
      </form>
    </div>
  </div>

  <!-- Load footer -->
  <?php
    require __DIR__ . "/../page-elements/header/footer.php";
  ?>
</body>

</html>
