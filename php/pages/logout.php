<!doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CPSC-332 Project</title>

  <link rel="stylesheet" href="../../css/style.css">
  <meta name="description" content="">
</head>

<body>

  <!-- Logs the user out -->
  <?php
    require_once "../sql/logout.php";
  ?>

  <!-- Displays the header -->
  <?php
    require_once "../page-elements/header.php";
  ?>

  You have been logged out.

  <!-- NOTE: Alternatively, we can redirect straight to the homepage from sql/logout.php -->

</body>

</html>
