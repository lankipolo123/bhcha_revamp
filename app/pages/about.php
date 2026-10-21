<?php
/** About. Item descriptions are short placeholders; replace with your own text. */
$sections = [
  'Maintaining Property Values:' => [
    'Enforcing Covenants, Conditions, and Restrictions' => 'Making sure homeowners follow the community rules.',
    'Maintaining Common Areas' => 'Upkeep of landscaping, the fitness area, clubhouses and future amenities.',
    'Establishing Architectural Standards' => 'Reviewing new construction and renovations against guidelines.',
    'Collecting Assessments (HOA Fees)' => 'Funding maintenance, security and operations.',
    'Addressing Violations Proactively' => 'Handling small issues before they grow.',
  ],
  'Enhancing Community Quality of Life:' => [
    'Providing and Maintaining Amenities' => 'Recreation and gathering spaces for residents.',
    'Promoting a Sense of Community' => 'Social events and activities.',
    'Ensuring Safety and Security' => 'Security staff, cameras and other measures.',
    'Resolving Disputes' => 'Mediating between neighbors.',
    'Protecting Resident Rights' => 'Fair treatment under the governing documents.',
    'Providing Services' => 'Coordinating trash collection and landscaping.',
  ],
  'Underlying Principles:' => [
    'Fairness and Equal Treatment' => 'Rules applied consistently to everyone.',
    'Transparency and Accountability' => 'Access to financial records and meeting minutes.',
    'Effective Communication' => 'Keeping residents informed.',
    'Professional Management' => 'Staff to handle day-to-day operations.',
  ],
  'Important Considerations:' => [
    'Balance' => 'Enforcing rules without being overly restrictive.',
    'Resident Involvement' => 'Encouraging participation in meetings and committees.',
    'Legal Compliance' => 'Operating within local and national law.',
  ],
];
?>
<p>BHCHA's main goals are to protect property values and keep Beverly Hills a good place to live, through planning, management, communication, fairness and transparency.</p>
<?php foreach ($sections as $heading => $items): ?>
  <p class="label"><?= e($heading) ?></p>
  <ul>
    <?php foreach ($items as $k => $v): ?><li><b><?= e($k) ?>:</b> <?= e($v) ?></li><?php endforeach; ?>
  </ul>
<?php endforeach; ?>
