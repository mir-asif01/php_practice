<?php require(base_path('./views/partials/header.php')) ?>
<?php require(base_path('./views/partials/nav.php')) ?>
<?php require(base_path('./views/partials/banner.php')) ?>

<main class="mt-[50px] flex col justify-center align-center">
  <div>
    <li class="text-white text-3xl">
      <a>
        <?= $note['body']  ?><br>
      </a>
    </li>
  </div>
  <br>
  <form class="p-4 text-white" method="POST">
    <input type="hidden" name="id" value=<?= $note['id'] ?>>
    <button type="submit">Delete</button>
  </form>
</main>

<?php require(base_path('./views/partials/footer.php')) ?>