<?php
require __DIR__ . '/includes/bootstrap.php';
$page = 'contact';
$title = 'Contact';
require __DIR__ . '/includes/header.php';
?>
<section class="page">
  <div class="page-head">
    <span class="eyebrow">Contact</span>
    <h1>Get in touch</h1>
    <p class="lede">Beverly Hills Community Homeowners Association Inc.</p>
  </div>

  <div class="contact-grid">
    <div class="panel">
      <span class="eyebrow">Offices</span>
      <dl class="kv">
        <?php foreach ($DATA['offices'] as [$k, $v]): ?>
          <dt><?= e($k) ?></dt><dd><?= e($v) ?></dd>
        <?php endforeach; ?>
        <dt>Phone</dt><dd><a class="mono" href="tel:<?= e(preg_replace('/[^+\d]/', '', $DATA['site']['phone'])) ?>"><?= e($DATA['site']['phone']) ?></a></dd>
        <dt>Website</dt><dd>www.bhcha.com</dd>
      </dl>
      <div class="hours">
        <span class="pill">Open <?= e($DATA['site']['hours']) ?></span>
        <span class="pill closed">Closed weekends &amp; national holidays</span>
      </div>
    </div>
    <div class="panel">
      <span class="eyebrow">Email directory</span>
      <dl class="kv">
        <?php foreach ($DATA['emails'] as [$k, $v]): ?>
          <dt><?= e($k) ?></dt><dd><a class="mono" href="mailto:<?= e($v) ?>"><?= e($v) ?></a></dd>
        <?php endforeach; ?>
      </dl>
    </div>
  </div>

  <div class="group">
    <div class="group-head"><h2>Emergency numbers</h2><span class="eyebrow">Antipolo · Taytay · Utilities</span></div>
    <div class="table-wrap">
      <table>
        <thead><tr><th>Service</th><th>Numbers</th></tr></thead>
        <tbody>
          <?php foreach ($DATA['emergency'] as [$svc, $area, $nums]): ?>
            <tr>
              <td><?= e($svc) ?><span class="area"><?= e($area) ?></span></td>
              <td class="nums"><?= $nums === null ? '<span class="tbd">Number to be added</span>' : e($nums) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="panel feature narrow">
    <span class="eyebrow">Online discussion</span>
    <h3>Ask questions and talk with neighbors on the discussion board.</h3>
    <div class="cta-row"><a class="btn btn-ghost btn-on-dark" href="https://bhcom.org/board/">Open discussion board ↗</a></div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
