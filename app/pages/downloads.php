<p class="label">DOWNLOADS</p>
<ul>
  <?php foreach ($D['folders'] as $f): ?>
    <li><?= $f['url'] ? '<a href="' . e($f['url']) . '">' . e($f['label']) . '</a>' : e($f['label']) ?></li>
  <?php endforeach; ?>
</ul>
<p>All public documents are available to members in the file repository: <a href="http://bhcha.com/cloud/">BHCHA CLOUD</a></p>
