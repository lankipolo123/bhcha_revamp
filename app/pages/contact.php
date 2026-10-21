<?php $c = $D['contact']; ?>
<p class="label">OFFICE INFORMATION:</p>
<p><?= e($D['site']['name']) ?><br>
Registered Address: <?= e($c['registered_address']) ?><br>
Satellite Office: <?= e($c['satellite_office']) ?><br>
Phone : <?= e($c['phone']) ?><br>
Website : <?= e($c['website']) ?></p>
<p class="label">Email Directory:</p>
<p><?php foreach ($c['emails'] as $k => $v): ?><?= e($k) ?> : <a href="mailto:<?= e($v) ?>"><?= e($v) ?></a><br><?php endforeach; ?></p>
<p>Open: <?= e($c['hours']['open']) ?><br>Closed: <?= e($c['hours']['closed']) ?></p>
<p class="label">EMERGENCY NUMBERS:</p>
<table class="em">
  <?php foreach ($D['emergency_numbers'] as $n): ?>
    <tr><td><?= e($n['service']) ?></td><td><?= $n['numbers'] ? e(implode(', ', $n['numbers'])) : 'xxxx.xxxxxxx' ?></td></tr>
  <?php endforeach; ?>
</table>
<p style="margin-top:18px">Join the online discussion to ask questions and talk with neighbors: <a href="<?= e($c['discussion_board']) ?>">Discussion Board</a></p>
