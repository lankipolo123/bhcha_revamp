<?php
$sections = ['ANNOUNCEMENT' => 'announcement', 'EVENTS' => 'events', 'BOARD MEETINGS' => 'board_meetings',
             'PROJECTS' => 'projects', 'PRESENTATIONS' => 'presentations', 'ARTICLES' => 'articles'];
foreach ($sections as $h => $key): ?>
  <p class="label"><?= e($h) ?></p>
  <ul>
    <?php foreach ($D['updates'][$key] as $d): ?><li><?= doc_link($d) ?></li><?php endforeach; ?>
    <?php if (!$D['updates'][$key]): ?><li>--&gt;</li><?php endif; ?>
  </ul>
<?php endforeach; ?>
<p>All public documents are available to members in the file repository: <a href="http://bhcha.com/cloud/">BHCHA CLOUD</a></p>
