<?php require(base_path('./views/partials/header.php')) ?>
<?php require(base_path('./views/partials/nav.php')) ?>
<?php require(base_path('./views/partials/banner.php')) ?>


<main class="mt-[50px] flex justify-center align-center">
  <form method="POST" action="/note" class="flex flex-col space-y-4 border rounded-md p-10">
    <input type="hidden" name="__method" value="PATCH">
    <input type="hidden" name="id" value="<?= $note['id'] ?>">
    <div class="flex flex-col">
      <label for="title" class="text-xl text-white mb-2">Title</label>
      <input name="title" id="title" class="px-3 py-2" value="<?= $note['title'] ?>" />
      <?php if (isset($errors['title'])): ?>
        <p class="text-red-800 text-xl bold mt-1">
          <?= $errors['title'] ?>
        </p>
      <?php endif; ?>
    </div>
    <div class="flex flex-col">
      <label for="body" class="text-xl text-white mb-2">Description</label>
      <textarea name="body" id="body" class="px-3 py-2"><?= $note['body'] ?></textarea>
      <?php if (isset($errors['body'])): ?>
        <p class="text-red-800 text-xl bold mt-1">
          <?= $errors['body'] ?>
        </p>
      <?php endif; ?>
    </div>
    <p>
      <button type="submit" class="bg-white text-blue-800 px-3 py-2 text-xl semibold mt-4">Update</button>
      <a href="/notes" class="bg-white text-blue-800 px-3 py-2 text-xl semibold mt-4">Cancel</a>
    </p>
  </form>
</main>

<?php require(base_path('./views/partials/footer.php')) ?>