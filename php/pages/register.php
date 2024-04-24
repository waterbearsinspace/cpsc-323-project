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

  <!-- Registration form -->
  <?php
    require_once "../sql/register.php";
  ?>

  <form class="user-form" action="register.php" method="post">

    <div class="form-content">

      <label for="username">Username:</label> 
      <input class="username" id="username" name="username" required="" type="text" />

      <label for="email">Email:</label>
      <input class="email" id="email" name="email" required="" type="email" />

      <label for="password">Password:</label>
      <input class="password" id="password" name="password" required="" type="password" />
      
      <input class="form-button" name="register" type="submit" value="Register" />
      
    </div>

  </form>

</body>

</html>
