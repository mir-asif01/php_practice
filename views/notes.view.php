<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>

<?php require('partials/banner.php') ?>

<main>
  <div>
    <?php foreach ($notes as $note) : ?>
      <li class="text-white text-3xl hover:underline">
        <a href="/note?id=<?= $note['id'] ?>">
          <?= $note['body']  ?><br>
        </a>
      </li>
    <?php endforeach; ?>
  </div>
</main>
<?php require('partials/footer.php') ?>