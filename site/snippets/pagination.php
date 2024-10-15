<nav class="project-pagination grid">

  <?php if ($pagination->hasPrevPage()) : ?>
    <a class="column" href="<?= $pagination->prevPageURL() ?>" style="<?= $pagination->hasNextPage() ? '--columns: 6' : '--columns: 12' ?>">
      vorherige Seite
    </a>
  <?php endif ?>

  <?php if ($pagination->hasNextPage()) : ?>
    <a class="column next" href="<?= $pagination->nextPageURL() ?>" style="<?= $pagination->hasPrevPage() ? '--columns: 6' : '--columns: 12' ?>">
      nächste Seite
    </a>
  <?php endif ?>

</nav>