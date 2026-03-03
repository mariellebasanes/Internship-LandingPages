<?php
$assetsBase = isset($GCO_BASE) ? $GCO_BASE . 'assets' : 'assets';
$services = [
  ['title' => 'Interview',                       'desc' => "For gathering information that allows the counselor to learn about the student's needs and current state.", 'icon' => 'ki-messages',        'paths' => 5],
  ['title' => 'Psychological Test Administration','desc' => 'Professional psychological assessments to better understand your strengths, challenges, and learning style.',  'icon' => 'ki-notepad-bookmark', 'paths' => 6],
  ['title' => 'Consultation',                    'desc' => 'One-on-one sessions to discuss academic, personal, or career-related concerns in a confidential setting.',       'icon' => 'ki-profile-circle',   'paths' => 3],
  ['title' => 'Counseling',                      'desc' => 'Ongoing support and guidance to help you navigate challenges and develop healthy coping strategies.',            'icon' => 'ki-heart',            'paths' => 2],
];
?>
<section id="services" class="bg-white py-20">
  <div class="container">

    <!-- Coral pink main card wrapping everything -->
    <div class="rounded-4 p-10 p-lg-16 position-relative overflow-hidden"
         style="background: linear-gradient(135deg, #FF6B6B 0%, #FF8E72 100%); box-shadow: 0 20px 60px rgba(255,107,107,0.30);">

      <!-- Ghost bg icons for texture -->
      <img src="<?php echo htmlspecialchars($assetsBase); ?>/img/bg-assets/flower.png"
           class="position-absolute d-none d-lg-block"
           style="top:-30px; right:-30px; opacity:0.1; width:200px; transform:rotate(-20deg); pointer-events:none;" alt="">
      <img src="<?php echo htmlspecialchars($assetsBase); ?>/img/bg-assets/happy-face.png"
           class="position-absolute d-none d-lg-block"
           style="bottom:-20px; left:-20px; opacity:0.1; width:180px; transform:rotate(15deg); pointer-events:none;" alt="">

      <!-- Header -->
      <div class="text-center mb-12 position-relative" style="z-index:1;">
        <span class="badge bg-white text-dark fs-9 ls-2 text-uppercase fw-bolder py-3 px-6 mb-5 rounded-pill d-inline-block">Our Services</span>
        <h2 class="fw-bolder fs-2x text-white mb-4">Choose the right <span style="color:#FFF176;">service</span> for you</h2>
        <p class="fs-6 mb-0 mw-550px mx-auto" style="color: rgba(255,255,255,0.88);">
          If you need more info, please check out the
          <a href="https://www.feutech.edu.ph/campus_life/gcu" class="fw-semibold" style="color:#FFF176;" target="_blank" rel="noopener">Guidance and Counseling Office</a> page.
        </p>
      </div>

      <!-- Service cards grid — inside the coral card -->
      <div class="row g-5 row-cols-1 row-cols-md-2 position-relative" style="z-index:1;">
        <?php foreach ($services as $s): ?>
        <div class="col">
          <div class="card border-0 h-100" style="border-radius:14px; border-left: 4px solid #FF6B6B !important; box-shadow: 0 2px 16px rgba(0,0,0,0.06);">
            <div class="card-body p-7">
              <div class="d-flex align-items-start gap-5">
                <div class="symbol symbol-50px flex-shrink-0">
                  <span class="symbol-label rounded-3" style="background: rgba(255,107,107,0.12);">
                    <i class="ki-duotone <?= $s['icon'] ?> fs-2x" style="color:#FF6B6B;">
                      <?php for ($p = 1; $p <= $s['paths']; $p++): ?><span class="path<?= $p ?>"></span><?php endfor; ?>
                    </i>
                  </span>
                </div>
                <div class="flex-grow-1">
                  <h3 class="fw-bold fs-5 mb-2"><?= htmlspecialchars($s['title']) ?></h3>
                  <p class="text-gray-600 fs-7 mb-0"><?= htmlspecialchars($s['desc']) ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- CTA buttons at bottom -->
      <div class="d-flex flex-wrap gap-4 justify-content-center mt-12 position-relative" style="z-index:1;">
        <a href="#" class="btn btn-dark rounded-pill px-10 py-4 fw-bolder fs-6">
          <i class="ki-duotone ki-calendar-2 fs-5 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
          Book an Appointment
        </a>
        <a href="https://www.feutech.edu.ph/campus_life/gcu" target="_blank" class="btn btn-outline-light rounded-pill px-10 py-4 fw-bolder fs-6">
          Learn More
        </a>
      </div>

    </div><!-- /coral card -->

  </div>
</section>