<section class="project-wrapper">

  <!-- Slider main container start -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <?php foreach ($arbeit->files()->sortBy('sort') as $file) : ?>
        <div class="swiper-slide">

          <?php if ($file->type() === 'image') : ?>
            <img src="<?= $file->url() ?>" alt="<?= $file->alt() ?>">
          <?php endif ?>

          <?php if ($file->type() === 'video') : ?>
            <video controls>
              <source src="<?= $file->url() ?>">
            </video>
          <?php endif ?>


        </div>
      <?php endforeach ?>
    </div>
    <!-- nav buttons -->
    <img src="/assets/icons/prev.svg" alt="Pfeil zurück" class="swiper-button-prev">
    <img src="/assets/icons/next.svg" alt="Pfeil weiter" class="swiper-button-next">
  </div>
  <!-- Slider main container end -->


  <!-- Accordion main container start -->
  <article class="accordion">
    <label for="<?= $arbeit->title()->lower() ?>">
      <h2><?= $arbeit->title() ?></h2>
      <img src="/assets/icons/kreuz.svg" alt="Kreuz Icon">
    </label>
    <input type="checkbox" name="accordion" id="<?= $arbeit->title()->lower() ?>">
    <!-- Dropdown start -->
    <div class="content">
      <p><?= $arbeit->text() ?></p>
      <div class="metadata-grid">
        <?php if ($arbeit->size()->isNotEmpty()) : ?>
          <span>Größe:</span>
          <span><?= $arbeit->size() ?></span>
        <?php endif ?>
        <?php if ($arbeit->material()->isNotEmpty()) : ?>
          <span>Material:</span>
          <span><?= $arbeit->material() ?></span>
        <?php endif ?>
        <?php if ($arbeit->date()->isNotEmpty()) : ?>
          <span>Jahr:</span>
          <span><?= $arbeit->date()->toDate('Y') ?>
            <?php if ($arbeit->endDate()->isNotEmpty()) : ?>
              – <?= $arbeit->endDate()->toDate('Y') ?>
            <?php endif ?>
          </span>
        <?php endif ?>
        <?php if ($arbeit->link()->isNotEmpty()) : ?>
          <?php $link = $arbeit->link()->toObject() ?>
          <span>Link:</span>
          <a href="<?= $link->url() ?>" target="empty"><?= $link->linktext() ?></a>
        <?php endif ?>
        <?php if ($arbeit->video()->isNotEmpty()) : ?>
          <?php $video = $arbeit->video()->toObject() ?>
          <span>Video:</span>
          <a href="<?= $video->url() ?>" target="empty"><?= $video->linktext() ?></a>
        <?php endif ?>
      </div>
    </div>
    <!-- Dropdown start -->
  </article>
  <!-- Accordion main container end -->
</section>