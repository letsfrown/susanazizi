
  <?= $row->startDate()->toDate('Y') ?>
  <?php if ($row->endDate()->isNotEmpty()) : ?>
    – <?= $row->endDate()->toDate('Y') ?>
  <?php endif ?>


  <div> <?= $row->entry() ?></div>