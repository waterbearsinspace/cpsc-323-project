<!doctype html>

<!-- Loads the html header -->
<?php
  require __DIR__ . "/../page-elements/html-head.php";
?>

<body>
  <!-- Displays the header -->
  <?php
    require __DIR__ . "/../page-elements/header/header.php";
  ?>

  <!-- Registration form -->
  <?php
    require __DIR__ . "/../sql/user-account/register.php";
  ?>

  <form class="user-form" action="register.php" method="post">
    <div class="form-content">
      <label for="username">
        Username:
      </label>
      <input class="username" id="username"
        name="username" required="" type="text" />

      <label for="email">
        Email:
      </label>
      <input class="email" id="email"
        name="email" required="" type="email" />

      <label for="password">
        Password:
      </label>
      <input class="password" id="password"
        name="password" required="" type="password" />

      <input class="form-button" name="register"
        type="submit" value="Register" />
    </div>
  </form>
</body>

</html>
