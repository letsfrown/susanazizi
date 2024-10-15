<footer>
  <?php if ($imprint = $pages->find('impressum')) : ?>
    <a href="<?= $imprint->url() ?>" <?php e($imprint->isOpen(), 'class="active"') ?>>
      <?= $imprint->title() ?>
    </a>
  <?php endif ?>

  <span>©<?= date("Y") ?></span>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?= js('assets/js/index.js') ?>
<?= js('@auto') ?>

</body>

</html>