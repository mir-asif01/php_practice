<?php require base_path("views/partials/header.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>

<body>
  <div class="lg:px-14 py-10 shadow-sm">
    <h1 class="text-4xl"><?= $heading ?></h1>
  </div>
  <a href="/posts" class="lg:px-14 my-5 underline text-blue-600">go back</a>
  <div class="mx-auto lg:px-14 mt-5 py-10">
    <h1 class="text-xl mb-2 font-semibold"><?= $post['title'] ?></h1>
    <p class="mt-3"><?= $post['body'] ?></p>
  </div>
  <div class="mx-auto lg:px-14 mt-2 flex gap-2">

    <form method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value=<?= $post['id'] ?>>
      <button class="bg-red-500 px-3 py-2 rounded-md text-white cursor-pointer hover:shadow-md">Delete</button>
      <button class="bg-blue-500 px-3 py-2 rounded-md text-white cursor-pointer hover:shadow-md">Edit</button>
    </form>

  </div>
</body>

<?php require base_path("views/partials/footer.php"); ?>