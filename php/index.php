<!doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CPSC-332 Project</title>

  <link rel="stylesheet" href="../css/style.css">
  <meta name="description" content="">
</head>

<body>

  <?php

    require_once "./page-elements/header.php";

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo($_SESSION['username']) . (' logged in!');
  } 

    
  ?>


</body>

</html>
