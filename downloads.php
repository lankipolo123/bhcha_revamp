<?php
require __DIR__ . '/includes/bootstrap.php';
$page = 'downloads';
$title = 'Downloads';
$folderIcon = '<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3 6.5A1.5 1.5 0 0 1 4.5 5h4.6l2 2h8.4A1.5 1.5 0 0 1 21 8.5v9A1.5 1.5 0 0 1 19.5 19h-15A1.5 1.5 0 0 1 3 17.5z"/></svg>';
require __DIR__ . '/includes/header.php';
?>
<section class="page">
  <div class="page-head">
    <span class="eyebrow">Downloads</span>
    <h1>Public documents</h1>
    <p class="lede">We keep our public documents open to all members. Each folder opens in the BHCHA Cloud file repository.</p>
  </div>
  <div class="folders">
    <?php foreach ($DATA['folders'] as [$label, $path]): ?>
      <a href="<?= e(cloud_folder_url($path)) ?>"><?= $folderIcon ?><span><?= e($label) ?></span></a>
    <?php endforeach; ?>
  </div>
  <div class="panel feature narrow">
    <span class="eyebrow">File repository</span>
    <h3>Browse everything in BHCHA Cloud</h3>
    <div class="cta-row"><a class="btn btn-ghost btn-on-dark" href="https://bhcha.com/cloud/">Open BHCHA Cloud ↗</a></div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
