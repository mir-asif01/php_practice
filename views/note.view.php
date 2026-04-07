<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>

<?php require('partials/banner.php') ?>

<main>
  <div>
    <li class="text-white text-3xl hover:underline">
      <a>
        <?= $note['body']  ?><br>
      </a>
    </li>
  </div>
</main>
<?php require('partials/footer.php') ?>