<?php snippet('header') ?>

<h1 name="<?= $page->title() ?>"></h1>

<main class="flow">
  <?= $page->text()->kt() ?>
</main>

<?php snippet('footer') ?>