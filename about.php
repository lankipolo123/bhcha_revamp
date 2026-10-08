<?php
require __DIR__ . '/includes/bootstrap.php';
$page = 'about';
$title = 'About';

$groups = [
    ['Protecting property values', [
        ['Enforcing the CC&Rs', "We make sure every homeowner follows the community's covenants, conditions and restrictions, so the neighborhood stays consistent and well kept."],
        ['Caring for common areas', 'Landscaping, the fitness area, the clubhouse and future shared amenities get regular upkeep so they keep their value for everyone.'],
        ['Architectural standards', 'New construction and renovations are reviewed against community guidelines to keep the neighborhood cohesive.'],
        ['Collecting dues', 'Association dues fund maintenance, security and day-to-day operations.'],
        ['Acting on violations early', 'Small issues are addressed before they grow into problems that affect the whole community.'],
    ]],
    ['Improving daily life', [
        ['Amenities', 'Recreation facilities and gathering spaces that make living here better.'],
        ['Community events', 'Social activities that help neighbors meet and build community spirit.'],
        ['Safety & security', 'Security personnel, cameras and other measures to protect residents and property.'],
        ['Resolving disputes', 'Mediation between neighbors to keep the peace.'],
        ["Residents' rights", 'Fair treatment for every resident, in line with the governing documents.'],
        ['Services', 'Coordinating services such as garbage collection and landscaping.'],
    ]],
];
$principles = [
    ['Fairness', 'Rules apply equally to every resident, without bias or favoritism.'],
    ['Transparency', 'Residents can see financial records, meeting minutes and other key documents.'],
    ['Communication', 'We keep residents informed about issues, events and rule changes.'],
    ['Professional management', 'Management staff may be hired to run daily operations and stay compliant with the law.'],
    ['Balance', 'We enforce the rules without being needlessly restrictive.'],
    ['Participation', 'Residents are encouraged to join meetings and committees so the Association reflects the community.'],
    ['Legal compliance', 'BHCHA operates within local and national law, and its documents must be legally sound.'],
];

function cards(array $items): void
{
    echo '<div class="grid">';
    foreach ($items as [$h, $p]) {
        printf('<div class="card"><h3>%s</h3><p>%s</p></div>', e($h), e($p));
    }
    echo '</div>';
}

require __DIR__ . '/includes/header.php';
?>
<section class="page">
  <div class="page-head">
    <span class="eyebrow">About BHCHA</span>
    <h1>What the Association does</h1>
    <p class="lede">Our main goals are to protect property values and keep Beverly Hills a good place to live. That takes planning, good management, open communication and fair treatment of every homeowner.</p>
  </div>

  <?php foreach ($groups as [$heading, $items]): ?>
    <div class="group">
      <div class="group-head"><h2><?= e($heading) ?></h2><span class="eyebrow"><?= count($items) ?> areas</span></div>
      <?php cards($items); ?>
    </div>
  <?php endforeach; ?>

  <div class="cols">
    <div class="group">
      <div class="group-head"><h2>How we work</h2></div>
      <?php cards($principles); ?>
    </div>
    <?php require __DIR__ . '/includes/rail.php'; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
