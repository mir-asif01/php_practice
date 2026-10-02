<?php require "partials/header.php";?>
<?php require "partials/nav.php";?>
<body>
  <div class="lg:px-14 py-10 shadow-sm">
    <h1 class="text-4xl"><?= $heading ?></h1>
  </div>
  <div class="lg:w-1/3 mx-auto lg:px-14 lg:py-16 mt-10 border border-gray-200 rounded-md"> 
    <form method="POST">
      <div class="mb-5">
        <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Title</label>
        <input type="text" id="title" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="title of post" required />
      </div>
      <div class="mb-5">
        <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Body</label>
        <textarea type="text" id="body" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="post description" required></textarea>
      </div>
      <button type="submit" class="bg-blue-500 px-3 py-2 rounded-md text-white cursor-pointer">Submit</button>
    </form>

  </div>
</body>

<?php require "partials/footer.php";?>