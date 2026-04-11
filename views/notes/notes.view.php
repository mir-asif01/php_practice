<?php require(base_path('./views/partials/header.php')) ?>
<?php require(base_path('./views/partials/nav.php')) ?>
<?php require(base_path('./views/partials/banner.php')) ?>

<main class="mt-[50px] flex justify-center align-center">
  <div>
    <?php foreach ($notes as $note) : ?>
      <ul class="text-white">
        <li class="text-3xl py-3 hover:underline">
          <a href="/note?id=<?= $note['id'] ?>">
            <?= $note['body']  ?><br>
          </a>
        </li>
      </ul>
    <?php endforeach; ?>
    <div class="mt-5">
      <a href="/notes/create" class="bg-white text-blue-800 px-5 py-3 text-xl semibold">Create Note</a>
    </div>
  </div>
</main>
<?php require(base_path('./views/partials/footer.php')) ?>