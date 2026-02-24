<?php
$assetsBase = 'pages/assets';
$services = [
  ['title' => 'Interview', 'desc' => "For gathering information that allows the counselor to learn about the student's needs and current state.", 'icon' => 'svg/shield-user.svg'],
  ['title' => 'Psychological Test Administration', 'desc' => 'Professional psychological assessments to better understand your strengths, challenges, and learning style.', 'icon' => 'svg/school.svg'],
  ['title' => 'Consultation', 'desc' => 'One-on-one sessions to discuss academic, personal, or career-related concerns in a confidential setting.', 'icon' => 'svg/logo/network.svg'],
  ['title' => 'Counseling', 'desc' => 'Ongoing support and guidance to help you navigate challenges and develop healthy coping strategies.', 'icon' => 'svg/logo/coach.svg'],
];
?>
<section id="services" class="gco-section gco-services">
  <div class="gco-container">
    <div class="text-center mb-5">
      <span class="gco-badge gco-badge-light">Services</span>
      <h2 class="gco-heading-xl mt-3 mb-3">Choose the right <span class="gco-heading-highlight">service</span> for you</h2>
      <p class="gco-text-muted mx-auto" style="max-width:48rem;font-size:1.125rem;">
        If you need more info, please check out the <a href="https://www.feutech.edu.ph/campus_life/gcu" class="gco-link-arrow" target="_blank" rel="noopener">Guidance and Counseling Office</a> page.
      </p>
    </div>
    <div class="gco-grid-2">
      <?php foreach ($services as $s): ?>
      <div class="gco-card">
        <div class="d-flex align-items-start gap-3">
          <div class="gco-card-icon flex-shrink-0">
            <img src="<?= $assetsBase ?>/<?= htmlspecialchars($s['icon']) ?>" alt="" aria-hidden="true">
          </div>
          <div class="flex-grow-1">
            <h3 class="gco-card-title"><?= htmlspecialchars($s['title']) ?></h3>
            <p class="gco-card-desc mb-2"><?= htmlspecialchars($s['desc']) ?></p>
            <a href="#" class="gco-link-arrow">Book this service &rarr;</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
