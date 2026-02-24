<?php
$assetsBase = 'pages/assets';
$categories = [
  [
    'title' => 'Interview Purposes',
    'color' => 'from-primary',
    'icon' => 'svg/logo/coach.svg',
    'items' => [
      ['title' => 'Student Leader Interview', 'desc' => "Interview for Incoming, Out-going student leaders' candidate of leadership awardee"],
      ['title' => 'Request for Recommendation', 'desc' => 'For students who are requesting Recommendation Forms for admission and scholarship purposes'],
      ['title' => 'Kumustahan Session or Student Routine Interview', 'desc' => 'General interview in lieu of updates on the students concerns and status'],
      ['title' => 'Student Routine Interview and Test Results Discussion', 'desc' => 'Support for relating and assistance in queries on the results of their psychological test. For clients who have already completed Psychological Test Administration'],
    ],
  ],
  [
    'title' => 'Psychological Test Administration Purposes',
    'color' => 'from-secondary',
    'icon' => 'svg/logo/credentials.svg',
    'items' => [
      ['title' => 'Referred by Counselor', 'desc' => 'Students who received a formal referral from their counselor for Psychological Test Administration, typically following an initial consultation session'],
      ['title' => 'Invitation from GCO Activity', 'desc' => 'Students who participated in GCO special programs (i.e. COPE, RISE, SASE, KUMUSTAHAN, Career Navigation etc.) and invited for Psychological Test Administration'],
    ],
  ],
  [
    'title' => 'Consultation & Counseling Purposes',
    'color' => 'from-primary',
    'icon' => 'svg/logo/coach.svg',
    'items' => [
      ['title' => 'Mental Health Support', 'desc' => 'Focused on emotional well-being and psychological health'],
      ['title' => 'Social Adjustment', 'desc' => 'Support for adapting to social environments and improving social interactions'],
      ['title' => 'Peer Relationships', 'desc' => 'Assistance with navigating friendships and peer dynamics'],
      ['title' => 'Family Dynamics', 'desc' => 'Support for addressing family-related challenges and conflicts'],
      ['title' => 'Relationship Development', 'desc' => 'Guidance for building and maintaining healthy relationships'],
      ['title' => 'Academic Support', 'desc' => 'Assistance with academic challenges and improving school performance'],
      ['title' => 'Bereavement', 'desc' => 'Assistance in coping with the loss of someone and support in the process of grieving'],
      ['title' => 'Occupational Problems', 'desc' => 'Assistance on work related concerns such as adjustments and relational issues'],
      ['title' => 'Legal Problems', 'desc' => 'Concern that involves the law that needs to be addressed'],
      ['title' => 'Consultation and Test Results Discussion', 'desc' => 'Support for relating and assistance in queries on the results of their psychological test. For clients who have already completed Psychological Test Administration'],
    ],
  ],
];
?>
<section class="gco-section gco-purpose position-relative">
  <div class="gco-container">
    <div class="text-center mb-5">
      <span class="gco-badge gco-badge-light">Purpose of Appointment</span>
      <h2 class="gco-heading-xl mt-3 mb-3">Find the <span class="gco-heading-highlight">Help You Need!</span></h2>
      <p class="gco-text-muted mx-auto" style="max-width:48rem;">Select your purpose and get the <span class="gco-heading-highlight">support you deserve</span>—quick, easy, and just for you!</p>
    </div>
    <div class="gco-purpose-carousel-wrap">
      <button type="button" class="gco-carousel-nav prev position-absolute" aria-label="Previous" data-purpose-prev>&#8249;</button>
      <button type="button" class="gco-carousel-nav next position-absolute" aria-label="Next" data-purpose-next>&#8250;</button>
      <div class="overflow-hidden">
        <div class="gco-carousel-inner" data-purpose-inner>
          <?php foreach ($categories as $cat): ?>
          <?php $isTwoCol = (count($cat['items']) == 2 || count($cat['items']) > 5); ?>
          <div class="gco-purpose-card">
            <div class="gco-purpose-card-header <?= htmlspecialchars($cat['color']) ?>">
              <div class="min-w-0">
                <h3 class="gco-purpose-header-title text-white mb-1 fw-bold"><?= htmlspecialchars($cat['title']) ?></h3>
                <span class="badge bg-white bg-opacity-25 text-white fs-7"><?= count($cat['items']) ?> options</span>
              </div>
            </div>
            <div class="gco-purpose-card-body<?= $isTwoCol ? ' gco-purpose-card-body--two-col' : '' ?>">
              <?php if ($isTwoCol): ?>
              <?php $items = $cat['items']; $mid = (int) ceil(count($items) / 2); ?>
              <div class="gco-purpose-two-col gco-purpose-grid">
                <?php for ($row = 0; $row < $mid; $row++): ?>
                  <?php foreach ([$row, $row + $mid] as $i): if ($i >= count($items)) continue; $item = $items[$i]; $num = $i + 1; ?>
                  <div class="gco-purpose-item">
                    <span class="gco-purpose-num" aria-hidden="true"><?= $num ?></span>
                    <div class="gco-purpose-item-content">
                      <h4><?= htmlspecialchars($item['title']) ?></h4>
                      <p><?= htmlspecialchars($item['desc']) ?></p>
                    </div>
                  </div>
                  <?php endforeach; ?>
                <?php endfor; ?>
              </div>
              <?php else: ?>
              <?php foreach ($cat['items'] as $idx => $item): ?>
              <div class="gco-purpose-item">
                <span class="gco-purpose-num" aria-hidden="true"><?= $idx + 1 ?></span>
                <div class="gco-purpose-item-content">
                  <h4><?= htmlspecialchars($item['title']) ?></h4>
                  <p><?= htmlspecialchars($item['desc']) ?></p>
                </div>
              </div>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="gco-dots d-flex justify-content-center gap-2">
        <?php foreach ($categories as $i => $c): ?>
        <button type="button" class="gco-dot gco-dot-light <?= $i === 0 ? 'active' : '' ?>" data-purpose-dot data-index="<?= $i ?>" aria-label="Slide <?= $i + 1 ?>"></button>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<script>
(function() {
  var inner = document.querySelector('[data-purpose-inner]');
  var dots = document.querySelectorAll('[data-purpose-dot]');
  var prev = document.querySelector('[data-purpose-prev]');
  var next = document.querySelector('[data-purpose-next]');
  if (!inner || !dots.length) return;
  var total = dots.length;
  var idx = 0;
  function go(i) {
    idx = (i + total) % total;
    inner.style.transform = 'translateX(-' + idx * 100 + '%)';
    dots.forEach(function(d, j) { d.classList.toggle('active', j === idx); });
  }
  prev && prev.addEventListener('click', function() { go(idx - 1); });
  next && next.addEventListener('click', function() { go(idx + 1); });
  dots.forEach(function(d) { d.addEventListener('click', function() { go(parseInt(d.getAttribute('data-index'), 10)); }); });
})();
</script>
