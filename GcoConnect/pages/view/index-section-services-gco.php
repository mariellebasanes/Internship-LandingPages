<?php
$services = [
  [
    'title' => 'Interview',
    'desc'  => "For gathering information that allows the counselor to learn about the student's needs and current state.",
    'icon'  => 'ki-messages',
    'paths' => 5,
  ],
  [
    'title' => 'Psychological Test Administration',
    'desc'  => 'Professional psychological assessments to better understand your strengths, challenges, and learning style.',
    'icon'  => 'ki-notepad-bookmark',
    'paths' => 6,
  ],
  [
    'title' => 'Consultation',
    'desc'  => 'One-on-one sessions to discuss academic, personal, or career-related concerns in a confidential setting.',
    'icon'  => 'ki-profile-circle',
    'paths' => 3,
  ],
  [
    'title' => 'Counseling',
    'desc'  => 'Ongoing support and guidance to help you navigate challenges and develop healthy coping strategies.',
    'icon'  => 'ki-heart',
    'paths' => 2,
  ],
];
?>
<section id="services" class="bg-body py-20">
  <div class="container">

    <div class="text-center mb-15">
      <span class="badge badge-light-primary fs-9 ls-2 text-uppercase fw-bold py-2 px-4 mb-4">Services</span>
      <h2 class="fw-bolder fs-2x mb-4">Choose the right <span class="text-primary">service</span> for you</h2>
      <p class="text-gray-600 fs-5 mw-600px mx-auto">
        If you need more info, please check out the
        <a href="https://www.feutech.edu.ph/campus_life/gcu" class="text-primary fw-semibold" target="_blank" rel="noopener">Guidance and Counseling Office</a> page.
      </p>
    </div>

    <div class="row g-5 row-cols-1 row-cols-md-2">
      <?php foreach ($services as $s): ?>
      <div class="col">
        <div class="card card-bordered card-flush h-100 hover-elevate-up">
          <div class="card-body p-8">
            <div class="d-flex align-items-start gap-5">
              <div class="symbol symbol-50px flex-shrink-0">
                <span class="symbol-label bg-light-primary">
                  <i class="ki-duotone <?= $s['icon'] ?> fs-2x text-primary">
                    <?php for ($p = 1; $p <= $s['paths']; $p++): ?><span class="path<?= $p ?>"></span><?php endfor; ?>
                  </i>
                </span>
              </div>
              <div class="flex-grow-1">
                <h3 class="fw-bold fs-4 mb-2"><?= htmlspecialchars($s['title']) ?></h3>
                <p class="text-gray-600 fs-6 mb-3"><?= htmlspecialchars($s['desc']) ?></p>
                <a href="#" class="text-primary fw-semibold fs-7">Book this service
                  <i class="ki-duotone ki-arrow-right fs-7 text-primary ms-1"><span class="path1"></span><span class="path2"></span></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
