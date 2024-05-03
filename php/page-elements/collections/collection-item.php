<a href="/cpsc-332-project/php/pages/collections.php?ID=<?= $collectionID ?>"
  class="card-container">
  <div class="collection-banner-image-container">
    <img class="collection-banner-image"
    src="/cpsc-332-project/img/<?= $collectionID ?>.png" />
  </div>
  <div class="card-info-container">
    <div class="card-name">
      <?= $collectionName; ?>
    </div>

    <div class="card-description">
      <?= $collectionDescription; ?>
    </div>
  </div>
</a>