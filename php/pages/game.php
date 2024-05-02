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

    <!-- Fetch data -->
    <?php
      $ProductID=$_GET['ID'];

      require __DIR__ . "/../sql/game/fetch-game-data.php";

      $ProductDescription = str_replace("\n", '<br>', $ProductDescription);
    ?>

    <div class="page-game-container">
      <div class="page-game-cover-container">
        <img class="page-game-cover" src=<?= $CoverURL ?>>
      </div>

      <div class="page-game-info-container">
        <div class="page-game-name">
          <?= $ProductName ?>
        </div>

        <hr style="width:100%; margin-bottom: 1em;"/>

        <div class="page-game-price">
          $<?= $ProductPrice ?>
        </div>

        <div class="page-game-quantity">
          Amount in Stock: <?= $ProductQuantity ?>
        </div>

        <div class="page-game-purchase-button">
          <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
              include __DIR__ . "/../page-elements/game/add-to-cart-button.php";
            }
            else {
              include __DIR__ . "/../page-elements/game/please-log-in.php";
            }
          ?>
        </div>

        <hr style="width:100%; margin-bottom: 1em;"/>

        <div class="page-game-more-info-container">
          <div class="page-game-more-info-line">
            <div class="page-game-more-info-attribute">
              Players
            </div>
            <div class="page-game-more-info-value">
              <?= $MinPlayers ?> - <?= $MaxPlayers ?>
            </div>
          </div>

          <div class="page-game-more-info-line">
            <div class="page-game-more-info-attribute">
              Play Type
            </div>
            <div class="page-game-more-info-value">
              <?= $PlayType ?>
            </div>
          </div>
        </div>
        <hr style="width:100%; margin-bottom: 1em;"/>

        <div class="page-game-description">
          <?= $ProductDescription ?>
        </div>


      </div>
    </div>
  </div>

  <!-- Load footer -->
  <?php
    require __DIR__ . "/../page-elements/header/footer.php";
  ?>
</body>

</html>
