<?php require(base_path('./views/partials/header.php')) ?>
<?php require(base_path('./views/partials/nav.php')) ?>
<?php require(base_path('./views/partials/banner.php')) ?>

<main class="mt-[50px] flex justify-center align-center">
  <div>
    <li class="text-white text-3xl">
      <a>
        <?= $note['body']  ?><br>
      </a>
    </li>
  </div>
</main>

<?php require(base_path('./views/partials/footer.php')) ?>