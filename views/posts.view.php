<?php require "partials/header.php";?>
<?php require "partials/nav.php";?>
<body>
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-10">
    <ul>
      <?php foreach ($filteredBooks as $book): ?>
        <li class="mt-5">
          <p class="text-xl font-semibold"><?= $book['name'] ?></p>
          <p><?= $book['author'] ?></p>
          <p><?= $book['ISBN'] ?></p>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</body>

<?php require "partials/footer.php";?>