<?php require(base_path('views/partials/header.php')) ?>
<?php require(base_path('views/partials/nav.php')) ?>

<?php require('partials/banner.php') ?>
<main>
  <div class="py-10">
    <h1 class="text-6xl text-white text-center">
      <?= $status ?>
    </h1>
    <h2 class="text-6xl text-white text-center"><?= $msg ?></h2>
  </div>
</main>
<?php require(base_path('views/partials/footer.php')) ?>