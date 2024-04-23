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
  
  <form class = "login-form" action="login.php" method="post">

    <label for="username">Username:</label>
    <input id="username" name="username" required="" type="text" />
    <label for="password">Password:</label> <input id="password" name="password" required="" type="password" />
    <input name="login" type="submit" value="Login" />
  </form>

</body>

</html>
