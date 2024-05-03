<nav class="navbar">
  <a href="/cpsc-332-project/php/pages/collections.php?ID=all-games" class="navbar-link">
    ALL GAMES
  </a>

  <div class="navbar-link dropdown">
    <a href="#" class="dropdown-button">COLLECTIONS ▾</a>
      <div class="dropdown-links">
        <?php require __DIR__ . "/../../sql/collections/generate-navbar-links.php"?>
      </div>
  </div>
</nav>
<hr style="
  margin: 0 calc(var(--side-margin) * -1) 16px;"
/>