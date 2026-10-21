<?php /** Organization. Mission/vision are placeholders; replace with the official statements. */
$name = fn($p) => $p['name'] === null ? 'xxxxxxxx xxxxxxxx' : '<b>' . e($p['name']) . '</b>';
?>
<p class="label">Mission Statement:</p>
<p>[Mission statement: quality of life, good service, open communication and fair enforcement of guidelines.]</p>
<p class="label">Vision Statement:</p>
<p>[Vision statement: a safe, well-maintained, harmonious community where every resident is heard and respected.]</p>
<hr>
<?php foreach (['BOARD OF TRUSTEES' => 'board', 'COMMITTEE HEAD' => 'committees', 'MANAGEMENT TEAM' => 'management'] as $h => $key): ?>
  <div class="people">
    <h4><?= e($h) ?></h4>
    <?php foreach ($D[$key] as $p): ?><div><?= $name($p) ?> | <?= e($p['role']) ?></div><?php endforeach; ?>
  </div>
  <hr>
<?php endforeach; ?>
