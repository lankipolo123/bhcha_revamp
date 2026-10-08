<?php
/** @var array $DATA */
/** @var string $page   key from $DATA['nav'] */
/** @var string $title */
$site = $DATA['site'];
$logo = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 20h18"/><path d="M5 20V11l7-6 7 6v9"/><path d="M10 20v-5h4v5"/></svg>';
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= e($title) ?> · <?= e($site['short']) ?></title>
<meta name="description" content="<?= e($site['name']) ?>, Antipolo City &amp; Taytay, Rizal.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,700;12..96,800&family=Public+Sans:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="bar">
  <div class="wrap">
    <a class="brand" href="index.php">
      <span class="brand-mark" aria-hidden="true"><?= $logo ?></span>
      <span class="brand-text"><b><?= e($site['short']) ?></b><span><?= e($site['name']) ?></span></span>
    </a>
    <button class="menu-btn" id="menu-btn" aria-expanded="false" aria-controls="nav">Menu</button>
    <nav class="nav" id="nav" aria-label="Main">
      <?php foreach ($DATA['nav'] as $key => [$label, $href]): ?>
        <a href="<?= e($href) ?>"<?= $key === $page ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
      <?php endforeach; ?>
    </nav>
  </div>
</header>
<main class="wrap">
