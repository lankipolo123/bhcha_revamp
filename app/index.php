<?php
declare(strict_types=1);

// Same URL scheme as the original site: index.php?id=about
$D = json_decode(file_get_contents(__DIR__ . '/../scrape/data.json'), true);

function e(?string $s): string { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); }
function doc_link(array $d): string {
    return $d['url'] ? '<a href="' . e($d['url']) . '">' . e($d['title']) . '</a>' : e($d['title']);
}

$pages = ['index' => 'Home', 'about' => 'About', 'organization' => 'Organization',
          'updates' => 'Updates', 'downloads' => 'Downloads', 'contact' => 'Contact'];
$id = $_GET['id'] ?? 'index';
if (!isset($pages[$id])) { http_response_code(404); $id = 'index'; }
$title = $pages[$id];
$url = fn(string $p) => $p === 'index' ? 'index.php' : 'index.php?id=' . $p;
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($title) ?> - BHCHA</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div id="wrapper">
  <header id="header" class="container">
    <div id="logo"><a href="index.php">BHCHA</a><span>Beverly Hills Community Homeowners Association</span></div>
    <div class="phone"><?= e($D['site']['phone']) ?></div>
  </header>
  <nav class="container">
    <ul id="nav">
      <?php foreach ($pages as $p => $label): ?>
        <li<?= $p === $id ? ' class="active"' : '' ?>><a href="<?= e($url($p)) ?>"><?= e($label) ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>
  <?php if ($id === 'index'): ?>
    <?php $banner = is_file(__DIR__ . '/assets/banner.jpg'); ?>
    <div class="container">
      <?php if ($banner): ?>
        <div class="banner photo" style="background-image:url(assets/banner.jpg)"></div>
      <?php else: ?>
        <div class="banner"><span>Beverly Hills<br>Homeowners<br>Community Association</span></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <div class="container page-title"><div><h1><?= e($title) ?></h1></div></div>
  <div class="container cols">
    <div class="main"><?php require __DIR__ . "/pages/$id.php"; ?></div>
    <aside class="side">
      <h3>Links</h3>
      <ul><?php foreach ($D['footer_links'] as [$l, $u]): ?><li><a href="<?= e($u) ?>"><?= e($l) ?></a></li><?php endforeach; ?></ul>
      <h3>Socials</h3>
      <ul><?php foreach ($D['socials'] as [$l, $u]): ?><li><a href="<?= e($u) ?>"><?= e($l) ?></a></li><?php endforeach; ?></ul>
    </aside>
  </div>
</div>
<footer id="footer">
  <span>Copyright &copy; <?= date('Y') ?> <a href="index.php">BHCHA</a></span>
  <a href="<?= e($D['site']['developer']['url']) ?>"><?= e($D['site']['developer']['name']) ?></a>
</footer>
</body>
</html>
