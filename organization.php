<?php
require __DIR__ . '/includes/bootstrap.php';
$page = 'organization';
$title = 'Organization';
require __DIR__ . '/includes/header.php';
?>
<section class="page">
  <div class="page-head">
    <span class="eyebrow">Organization</span>
    <h1>Who runs BHCHA</h1>
    <p class="lede">The Association is led by an elected Board of Trustees, supported by committees and a management team.</p>
  </div>

  <div class="statement">
    <div class="card"><span class="eyebrow">Mission</span><p>To protect and improve the quality of life in our community through good service, open communication and fair enforcement of guidelines, while respecting the needs of every homeowner.</p></div>
    <div class="card"><span class="eyebrow">Vision</span><p>A safe, well-kept and harmonious community where homeowners are proud to live, every voice is heard, and the Association is a model of good HOA management.</p></div>
  </div>

  <?php foreach ([['Board of Trustees', 'board', 'members'], ['Committee heads', 'committees', 'committees'], ['Management team', 'management', 'roles']] as [$heading, $key, $unit]): ?>
    <div class="group">
      <div class="group-head"><h2><?= e($heading) ?></h2><span class="eyebrow"><?= count($DATA[$key]) ?> <?= $unit ?></span></div>
      <?php render_people($DATA[$key]); ?>
    </div>
  <?php endforeach; ?>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
