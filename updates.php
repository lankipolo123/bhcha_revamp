<?php
require __DIR__ . '/includes/bootstrap.php';
$page = 'updates';
$title = 'Updates';
require __DIR__ . '/includes/header.php';
?>
<section class="page">
  <div class="page-head">
    <span class="eyebrow">Updates</span>
    <h1>News &amp; announcements</h1>
    <p class="lede">Announcements, meetings and presentations from the Association.</p>
  </div>
  <div class="cols">
    <div class="group">
      <?php foreach ([['Announcements', 'announcements'], ['Presentations', 'presentations']] as [$heading, $key]): ?>
        <div class="group-head"><h2><?= e($heading) ?></h2></div>
        <?php render_docs($DATA[$key]); ?>
      <?php endforeach; ?>

      <?php foreach ([['Events', 'events', 'events'], ['Board meetings', 'board_meetings', 'meeting notes'], ['Projects', 'projects', 'projects'], ['Articles', 'articles', 'articles']] as [$heading, $key, $noun]): ?>
        <?php if ($DATA[$key]): ?>
          <div class="group-head"><h2><?= e($heading) ?></h2></div>
          <?php render_docs($DATA[$key]); ?>
        <?php endif; ?>
      <?php endforeach; ?>

      <div class="grid">
        <?php foreach ([['Events', 'events', 'events'], ['Board meetings', 'board_meetings', 'meeting notes'], ['Projects', 'projects', 'projects'], ['Articles', 'articles', 'articles']] as [$heading, $key, $noun]): ?>
          <?php if (!$DATA[$key]): ?>
            <div class="card"><span class="eyebrow"><?= e($heading) ?></span><p>No <?= e($noun) ?> posted yet.</p></div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <?php require __DIR__ . '/includes/rail.php'; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
