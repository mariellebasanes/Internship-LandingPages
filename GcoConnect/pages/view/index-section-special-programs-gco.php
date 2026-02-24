<?php
$assetsBase = 'pages/assets';
$eventsBase = isset($GCO_BASE) ? $GCO_BASE . 'assets/img/events' : 'assets/img/events';
$programs = [
  [
    'title' => 'IQ and EQ Testing',
    'subtitle' => 'FOR TERM 2 AY 2025-2026',
    'category' => 'Event Ended',
    'desc' => "GCO R.A.D.A.R.: IQ and EQ Testing for Term 2, AY '25-26",
    'date' => 'Mon • January 19, 2026 • 08:00 AM',
    'location' => 'Case room F1604',
    'dateShort' => 'Jan 19 to 22, 2026',
    'locationShort' => 'Case Room',
    'badge' => 'Recognizing Abilities, Drives, Attitudes, and Resilience',
    'badgeStyle' => 'yellow',
    'barColor' => '#A8B562',
    'image' => 'IQ and EQ Testing.png',
  ],
  [
    'title' => 'kumustahan',
    'subtitle' => 'Group Routine Interview',
    'category' => 'Event Ended',
    'desc' => '"KUMUSTAHAN": Group Routine Interview for Students',
    'date' => 'Thu • December 4, 2025 • 09:00 AM',
    'location' => '1603 AVR',
    'dateShort' => 'Dec 4, 2025',
    'locationShort' => '1603 AVR',
    'badge' => 'ESE DEVELOPMENT ACTIVITY: G.A.B.Y. SERIES',
    'badgeStyle' => 'pink',
    'barColor' => '#4ECDC4',
    'image' => 'kumustahan.png',
  ],
  [
    'title' => 'STARTING YOUR CAREER PATH',
    'subtitle' => 'PSYCHOLOGICAL TESTING AND CAREER DISCUSSION',
    'category' => 'Event Ended',
    'desc' => 'Career Development Activity: G.A.B.A.Y. Series...',
    'date' => 'Mon • December 1, 2025 • 09:00 AM',
    'location' => '1603 AVR',
    'dateShort' => 'Dec 1, 2025',
    'locationShort' => '1603 AVR',
    'badge' => 'ESE DEVELOPMENT ACTIVITY: G.A.B.Y. SERIES',
    'badgeStyle' => 'pink',
    'barColor' => '#E94C89',
    'image' => 'career path.png',
  ],
];
?>
<section class="gco-section gco-special" id="featured-events">
  <div class="gco-special-bg" aria-hidden="true"></div>
  <div class="gco-container position-relative">
    <div class="text-center mb-5">
      <span class="gco-special-badge">SPECIAL PROGRAMS</span>
      <h2 class="gco-special-title mt-3 mb-3">Featured Events &amp; Activities</h2>
      <p class="gco-special-subtitle mx-auto mb-0">Join program-based interviews, testing, and consultation sessions—connected in <strong>Eventually</strong>.</p>
    </div>
    <div class="gco-special-carousel position-relative">
      <button type="button" class="gco-carousel-nav prev" aria-label="Previous" data-special-prev><span class="gco-carousel-arrow" aria-hidden="true">&#8249;</span></button>
      <button type="button" class="gco-carousel-nav next" aria-label="Next" data-special-next><span class="gco-carousel-arrow" aria-hidden="true">&#8250;</span></button>
      <div class="gco-special-track-wrap">
        <div class="d-flex gap-4 gco-special-track" data-special-inner>
          <?php foreach ($programs as $p): ?>
          <div class="gco-special-card flex-shrink-0" style="width:min(100%, 22rem);">
              <div class="gco-special-card-inner">
              <div class="gco-special-card-header">
                <?php if (!empty($p['image'])): ?>
                <div class="gco-special-card-media">
                  <img src="<?= htmlspecialchars($eventsBase . '/' . $p['image']) ?>" alt="" class="img-fluid">
                </div>
                <?php endif; ?>
              </div>
              <div class="gco-special-card-body">
                <p class="gco-special-status"><?= htmlspecialchars($p['category']) ?></p>
                <h4 class="gco-special-detail-title"><?= htmlspecialchars($p['desc']) ?></h4>
                <p class="gco-special-detail-meta"><span class="gco-special-icon gco-special-icon-calendar" aria-hidden="true"></span><?= htmlspecialchars($p['date']) ?></p>
                <p class="gco-special-detail-meta mb-0"><span class="gco-special-icon gco-special-icon-location" aria-hidden="true"></span><?= htmlspecialchars($p['location']) ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="gco-dots gco-dots--special mt-4">
        <?php foreach ($programs as $i => $p): ?>
        <button type="button" class="gco-dot <?= $i === 0 ? 'active' : '' ?>" data-special-dot data-index="<?= $i ?>" aria-label="Slide <?= $i + 1 ?>"></button>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<script>
(function() {
  var inner = document.querySelector('[data-special-inner]');
  var dots = document.querySelectorAll('[data-special-dot]');
  var prev = document.querySelector('[data-special-prev]');
  var next = document.querySelector('[data-special-next]');
  if (!inner || !dots.length) return;
  var total = dots.length;
  var idx = 0;
  function slideWidth() { var card = inner.querySelector('.gco-special-card'); return card ? card.offsetWidth + 24 : 0; }
  function go(i) {
    idx = Math.max(0, Math.min(i, total - 1));
    inner.style.transform = 'translateX(-' + (idx * slideWidth()) + 'px)';
    dots.forEach(function(d, j) { d.classList.toggle('active', j === idx); });
  }
  if (prev) prev.addEventListener('click', function() { go(idx - 1); });
  if (next) next.addEventListener('click', function() { go(idx + 1); });
  dots.forEach(function(d) { d.addEventListener('click', function() { go(parseInt(d.getAttribute('data-index'), 10)); }); });
})();
</script>
