<?php require(base_path('./views/partials/header.php')) ?>
<?php require(base_path('./views/partials/nav.php')) ?>
<?php require(base_path('./views/partials/banner.php')) ?>

<main class="mt-[50px] flex flex-col justify-center align-center">
  <div>
    <li class="text-white text-3xl">
      <a>
        <?= $note['title'] ?><br>
        <?= $note['body'] ?><br>
      </a>
    </li>
  </div>
  <br>
  <form class="p-4 text-white" method="POST">
    <input type="hidden" name="__method" value="DELETE">
    <input type="hidden" name="id" value=<?= $note['id'] ?>>
    <button class="border border-current px-3 py-2 bg-white text-red-800" type="submit">Delete</button>
    <a href="/note/edit?id=<?= $note['id'] ?>" class="border border-current px-3 py-2 bg-white text-blue-800">Edit</a>
  </form>
</main>

<?php require(base_path('./views/partials/footer.php')) ?>