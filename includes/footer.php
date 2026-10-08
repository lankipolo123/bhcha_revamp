<?php /** @var array $DATA */ $site = $DATA['site']; ?>
</main>
<footer>
  <div class="wrap">
    <div class="foot-brand">
      <a class="brand" href="index.php">
        <span class="brand-mark" aria-hidden="true"><?= $logo ?></span>
        <span class="brand-text"><b><?= e($site['short']) ?></b><span><?= e($site['name']) ?></span></span>
      </a>
      <p class="foot-note">© <?= date('Y') ?> <?= e($site['short']) ?> · Antipolo City &amp; Taytay, Rizal</p>
    </div>
    <div><h4>Links</h4><?php render_link_list($DATA['resident_links'], ''); ?></div>
    <div><h4>Socials</h4><?php render_link_list($DATA['socials'], ''); ?></div>
    <div><h4>Pages</h4>
      <ul>
        <?php foreach ($DATA['nav'] as $key => [$label, $href]): if ($key === 'home') continue; ?>
          <li><a href="<?= e($href) ?>"><?= e($label) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</footer>
<script src="assets/js/main.js" defer></script>
</body>
</html>
