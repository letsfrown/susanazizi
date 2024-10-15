<?php snippet('header') ?>
<h1 name="<?= $page->title() ?>"></h1>

<main class="grid">

  <section class="flow">
    <h2>Biografie</h2>
    <?= $page->bio()->kt() ?>
    <h2>Kontakt</h2>
    <?= $page->contact()->kt() ?>
  </section>



  <section class="flow">
    <h2>Ausbildung & Berufspraxis</h2>
    <article class="info-grid">
      <?php foreach ($page->ausbildung()->toStructure() as $row) {
        snippet(('timetable'), ['row' => $row]);
      }  ?>
    </article>

  </section>

  <section class="flow">
    <h2>Ausstellungen</h2>
    <article class="info-grid">
      <?php foreach ($page->ausstellungen()->toStructure() as $row) {
        snippet(('timetable'), ['row' => $row]);
      }  ?>
    </article>
  </section>

  <section class="flow">
    <h2>Vermittlung</h2>
    <article class="info-grid">
      <?php foreach ($page->vermittlung()->toStructure() as $row) {
        snippet(('timetable'), ['row' => $row]);
      }  ?>
    </article>
  </section>
</main>

<?php snippet('footer') ?>