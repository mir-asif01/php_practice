<?php require "partials/header.php";?>
<?php require "partials/nav.php";?>
<body>
  <div class="lg:px-14 py-10 shadow-sm">
    <h1 class="text-4xl"><?= $heading ?></h1>
  </div>
  <div class="mx-auto lg:px-14 grid grid-cols-3 gap-5">
    <?php foreach ($posts as $post): ?>
        <div class="mt-5 border border-gray-200 rounded-sm p-5 cursor-pointer">
          <ul>
            <li class="mb-2 text-blue-600 hover:underline">
              <a href="/post?id=<?= $post['id'] ?>"> <?= $post['title'] ?></a>
            </li>
          </ul>
        </div>
    <?php endforeach ?>
  </div>
</body>

<?php require "partials/footer.php";?>