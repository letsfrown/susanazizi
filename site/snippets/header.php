<!DOCTYPE html>
<html lang="de" class="no-js">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php if ($page->isHomePage()) : ?>
    <title><?= $site->title() ?></title>
  <?php else : ?>
    <title><?= $page->title() ?> | <?= $site->title() ?></title>
  <?php endif ?>

  <?php snippet('autofavicon') ?>
  <?= css('/assets/css/reset.css') ?>
  <?= css('/assets/css/index.css') ?>
  <?= css('@auto') ?>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.css"
/>
</head>


<body>

  <header>
    <nav>
      <!-- Home Link -->
      <a href="<?= $site->url() ?>" <?php e($site->homePage()->isOpen(), 'class="active"') ?>>
        <?= $site->title() ?>
      </a>
      <!-- Info Link -->
      <?php foreach ($site->children()->template('info')->listed() as $item) : ?>
        <a href="<?= $item->url() ?>" <?php e($item->isOpen(), 'class="active"') ?>>
          <?= $item->title() ?>
        </a>
      <?php endforeach ?>
    </nav>
  </header>