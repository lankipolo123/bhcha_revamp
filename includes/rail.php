<?php /** @var array $DATA */ ?>
<aside class="rail">
  <div class="panel feature">
    <span class="eyebrow">Resident links</span>
    <?php render_link_list($DATA['resident_links']); ?>
  </div>
  <div class="panel">
    <span class="eyebrow">Socials</span>
    <?php render_link_list($DATA['socials']); ?>
  </div>
  <div class="panel">
    <span class="eyebrow">Office</span>
    <p class="mono"><?= e($DATA['site']['phone']) ?></p>
    <p class="muted-sm"><?= e($DATA['site']['hours']) ?></p>
  </div>
</aside>
