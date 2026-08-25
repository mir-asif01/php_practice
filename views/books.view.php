<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
  </style>
  <?php require "partials/nav.php";?>
</head>

<body>
  <h1>Recommended Books</h1>
  <ul>
    <?php foreach ($filteredBooks as $book): ?>
      <li>
        <p><?= $book['name'] ?></p>
        <p><?= $book['author'] ?></p>
        <p><?= $book['ISBN'] ?></p>
      </li>
    <?php endforeach ?>
  </ul>
</body>

</html>