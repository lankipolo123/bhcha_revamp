<?php
require __DIR__ . '/includes/bootstrap.php';
$page = 'home';
$title = 'Home';
require __DIR__ . '/includes/header.php';
?>
<section class="page">
  <div class="hero">
    <div class="hero-copy">
      <span class="eyebrow">Antipolo City &amp; Taytay, Rizal · Since 1964</span>
      <h1>A green, gated neighborhood with <em>sixty years</em> of history.</h1>
      <p class="lede">The Beverly Hills Community Homeowners Association represents and serves homeowners on both the Antipolo and Taytay sides of Beverly Hills Subdivision.</p>
      <div class="cta-row">
        <a class="btn btn-primary" href="updates.php">Latest updates</a>
        <a class="btn btn-ghost" href="#governing-documents">Governing documents</a>
      </div>
    </div>
    <div class="hero-art">
      <canvas id="canopy" aria-label="Illustration of a tree canopy" role="img"></canvas>
      <div class="hero-tag"><span>Approx. 123 hectares</span><span>Former mango plantation</span></div>
    </div>
  </div>

  <div class="facts">
    <div class="fact"><b>1964</b><span>Opened as the first residential subdivision in Antipolo–Taytay</span></div>
    <div class="fact"><b>~123 ha</b><span>Total land area of the subdivision</span></div>
    <div class="fact"><b>1984</b><span>Barangay Beverly Hills created under BP Blg. 787</span></div>
    <div class="fact"><b>2</b><span>Local governments: Antipolo City and Taytay</span></div>
  </div>

  <div class="cols">
    <div class="prose">
      <span class="eyebrow">Our community</span>
      <h2>Quiet mornings above a busy metro</h2>
      <p>Beverly Hills is known for its tall trees and dense greenery. Birds, lizards and small animals live among the homes, and the mornings stay cool and quiet while Metro Manila wakes up below.</p>

      <h2>History</h2>
      <div class="timeline">
        <div class="tl-item"><span class="tl-year">Before 1964</span><p>The land was a large mango plantation, typical of the Rizal countryside at the time.</p></div>
        <div class="tl-item"><span class="tl-year">1964</span><p>Beverly Hills Subdivision opens on about 123 hectares, the first planned residential subdivision in the Antipolo–Taytay area. It set the pattern for many developments that followed.</p></div>
        <div class="tl-item"><span class="tl-year">27 April 1984</span><p>Batas Pambansa Blg. 787 separates the area from Barangay San Roque and creates Barangay Beverly Hills, named after the subdivision.</p></div>
        <div class="tl-item"><span class="tl-year">Today</span><p>The subdivision spans Barangay Beverly Hills in Antipolo and Barangay Dolores in Taytay.</p></div>
      </div>

      <h2>About the Association</h2>
      <p>BHCHA is the officially recognized homeowners association for the Beverly Hills community under Antipolo City and the Municipality of Taytay. It speaks for property owners and makes sure their concerns about their homes and neighborhood are heard.</p>
      <p>A Board of Trustees sets direction and keeps the Association within its corporate charter under DHSUD. A management team, supervised by the Board, applies the governing documents day to day.</p>

      <h2 id="governing-documents">Governing documents</h2>
      <?php render_docs($DATA['governing_docs']); ?>
    </div>
    <?php require __DIR__ . '/includes/rail.php'; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
