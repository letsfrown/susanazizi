<?php snippet('header') ?>
<h1 name="<?= $page->title() ?>"></h1>


<main class="grid center arbeiten" data-page="<?= $pagination->nextPage() ?>" data-limit="<?= $limit ?>">

  <section class="intro-wrapper">
    <?= $site->intro() ?>
  </section>

  <?php foreach ($arbeiten as $arbeit) : ?>
    <?php snippet('arbeit', ['arbeit' => $arbeit]) ?>
  <?php endforeach ?>

  <button class="load-more" accesskey="m">
    <span>mehr laden</span>
    <img src="/assets/icons/imperfect-circle.svg" alt="decorative element: imperfect circle">
  </button>

</main>



<?php if ($pagination->hasPages()) : ?>
  <?php snippet('pagination', ['pagination' => $pagination]) ?>
<?php endif ?>

<?php snippet('footer') ?>