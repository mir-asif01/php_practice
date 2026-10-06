<?php require "views/partials/header.php";?>
<?php require "views/partials/nav.php";?>
<body>
  <div class="lg:px-14 py-10 shadow-sm">
    <h1 class="text-4xl"><?= $heading ?></h1>
  </div>
  <div class="lg:w-1/3 mx-auto lg:px-14 lg:py-16 mt-10 border border-gray-200 rounded-md"> 
    <form method="POST">
      <div class="mb-5">
        <label for="title" class="block mb-2.5 text-sm font-medium text-heading">Title</label>
        <input type="text" name="title" id="title" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
        placeholder="title of post" value=<?= isset($_POST['title']) ? $_POST['title'] : '' ?>
        />
        <p class="text-red-500 font-small"><?= $errors['title'] ?></p>
      </div>
      <div class="mb-5">
        <label for="body" class="block mb-2.5 text-sm font-medium text-heading">Body</label>
        <textarea type="text" id="body" name="body" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
        rows="5"
        placeholder="post description"><?= isset($_POST['body']) ? $_POST['body'] : '' ?></textarea>
        <p class="text-red-500 font-small"><?= $errors['body']?></p>
      </div>
      <button type="submit" class="bg-blue-500 px-3 py-2 rounded-md text-white cursor-pointer">Submit</button>
    </form>

  </div>
</body>

<?php require "views/partials/footer.php";?>