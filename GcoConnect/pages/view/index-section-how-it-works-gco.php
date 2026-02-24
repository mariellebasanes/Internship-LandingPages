<?php
// Use custom illustrations from assets/img/gco-how-it-works/
$assetsBase = isset($GCO_BASE) ? $GCO_BASE . 'assets/img/gco-how-it-works' : 'assets/img/gco-how-it-works';
$steps = [
  ['num' => '01', 'title' => 'Service Type',        'desc' => 'Select the service you want to avail',             'icon' => 'Service Type.png'],
  ['num' => '02', 'title' => 'Basic Info',          'desc' => 'Verify and update your contact details',          'icon' => 'Basic Info.png'],
  ['num' => '03', 'title' => 'Schedule Booking',    'desc' => 'Choose your preferred date and time',             'icon' => 'Schedule Booking.png'],
  ['num' => '04', 'title' => 'Appointment Details', 'desc' => 'Provide purpose along with any additional notes', 'icon' => 'Appointment Details.png'],
  ['num' => '05', 'title' => 'Completed',           'desc' => 'Get ready for your session',                      'icon' => 'Completed.png'],
];
?>
<section id="how-it-works" class="gco-section gco-how">
  <div class="gco-container">
    <div class="text-center mb-5">
      <span class="gco-badge">HOW IT WORKS</span>
      <h2 class="gco-heading-xl text-white mt-3 mb-3">Book your appointment in <span class="text-white" style="opacity:.85">5 easy steps</span></h2>
      <p class="text-white mb-0" style="opacity:.9">Follow our simple process to get the <u>support you need</u></p>
    </div>
    <div class="row g-4 justify-content-center">
      <?php foreach ($steps as $i => $step): ?>
      <div class="col-12 col-lg-10">
        <div class="d-flex flex-column flex-md-row align-items-center gap-4 <?= $i % 2 === 1 ? 'flex-md-row-reverse' : '' ?> <?= $i % 2 === 1 ? 'ms-md-auto' : '' ?>">
          <div class="gco-step-num flex-shrink-0"><?= htmlspecialchars($step['num']) ?></div>
          <div class="gco-step-card flex-grow-1 w-100">
            <div class="d-flex align-items-start gap-3">
              <div class="gco-step-icon-wrap flex-shrink-0">
                <img src="<?= $assetsBase ?>/<?= htmlspecialchars($step['icon']) ?>" alt="" aria-hidden="true" style="width:2.5rem;height:2.5rem;object-fit:contain;filter:brightness(0) invert(1);">
              </div>
              <div>
                <h3 class="gco-step-title text-white"><?= htmlspecialchars($step['title']) ?></h3>
                <p class="gco-step-desc text-white mb-0"><?= htmlspecialchars($step['desc']) ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-5">
      <div class="d-inline-block rounded-pill px-4 py-3 bg-white bg-opacity-10 border border-white border-opacity-25">
        <p class="text-white mb-0 small" style="opacity:.9">&#128161; Need help? Our support team is here to guide you through each step</p>
      </div>
    </div>
  </div>
</section>
