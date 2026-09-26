<?php require "partials/header.php";?>
<?php require "partials/nav.php";?>
<body>
  <div class="lg:px-14 py-10 shadow-sm">
    <h1 class="text-4xl"><?= $heading ?></h1>
  </div>
  <a href="/posts" class="lg:px-14 my-5 underline text-blue-600">go back</a>
  <div class="mx-auto lg:px-14 mt-5 py-10">
    <h1 class="text-xl mb-2 font-semibold"><?= $post['title'] ?></h1>
    <p class=""><?= $post['body'] ?></p>
  </div>
</body>

<?php require "partials/footer.php";?>