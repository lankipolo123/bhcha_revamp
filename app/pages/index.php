<?php /** Home. Paragraphs are placeholders summarizing the original; replace with your own text. */ ?>
<p>Beverly Hills Subdivision is a green, tree-filled community and home to many birds and small animals, a quiet contrast to busy Metro Manila.</p>
<p>Opened in 1964, it was the first residential subdivision in the Antipolo–Taytay area. It covers about 123 hectares of land that was once a mango plantation.</p>
<p>It set an early example for later residential developments in Antipolo and Taytay.</p>
<p>The subdivision spans Barangay Beverly Hills in Antipolo and Barangay Dolores in Taytay. Barangay Beverly Hills was created on April 27, 1984 by Batas Pambansa Blg. 787, separating it from Barangay San Roque.</p>
<p>The Beverly Hills Community Homeowners Association (BHCHA) is the recognized body representing homeowners under Antipolo City and Taytay.</p>
<p>A Board of Trustees sets direction within the Association's DHSUD charter, and a management team supervised by the Board enforces the governing documents.</p>
<p class="label">The governing documents of BHCHA are:</p>
<ul>
  <?php foreach ($D['governing_documents'] as $d): ?>
    <li><?= str_starts_with($d['title'], '2024 ') ? '2024 ' . doc_link(['title' => substr($d['title'], 5), 'url' => $d['url']]) : doc_link($d) ?></li>
  <?php endforeach; ?>
</ul>
