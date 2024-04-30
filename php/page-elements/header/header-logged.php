<header class = "header-container">
  <a href = "/index.php" class = "logo">
    CPSC-332 PROJECT
  </a>

  <nav class = "login-container">
    <div class = 'display-name'>
      <?php
        echo($_SESSION['username']);
      ?>
    </div>

    <a href = "/cpsc-332-project/php/pages/cart.php"
      class = "cart-button">
      CART
    </a>

    <a href = "/cpsc-332-project/php/pages/logout.php"
      class = "login logout header-link">
      LOG OUT
    </a>
  </nav>
</header>

<hr style="
  margin-left: calc(var(--side-margin) * -1);
  margin-right: calc(var(--side-margin) * -1);
  margin-bottom: 24px;"
  />