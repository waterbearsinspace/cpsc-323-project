<!doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CPSC-332 Project</title>

  <link rel="stylesheet" href="../../css/style.css">
  <meta name="description" content="">
</head>

<body>

  <!-- Displays the header -->
  <?php
    require_once "../page-elements/header.php";
  ?>

  <!-- Login form-->
  <?php
    require_once "../sql/login.php";
  ?>
  
  <form class="user-form" action="login.php" method="post">

    <div class="form-content">

      <label for="username">Username:</label>
      <input id="username" name="username" required="" type="text" />

      <label for="password">Password:</label> 
      <input id="password" name="password" required="" type="password" />

      <input class="form-button" name="login" type="submit" value="Log In" />

    </div>

  </form>

</body>

</html>
