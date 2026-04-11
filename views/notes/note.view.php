<?php require('./views/partials/header.php') ?>
<?php require('./views/partials/nav.php') ?>
<?php require('./views/partials/banner.php') ?>

<main class="mt-[50px] flex justify-center align-center">
  <div>
    <li class="text-white text-3xl">
      <a>
        <?= $note['body']  ?><br>
      </a>
    </li>
  </div>
</main>

<?php require('./views/partials/footer.php') ?>