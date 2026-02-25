<?php
$photoBase = isset($GCO_BASE)
  ? $GCO_BASE . 'assets/img/GCO Assets/gco faculties'
  : 'assets/img/GCO Assets/gco faculties';
$team = [
  ['name' => 'Rochile G. Borje',          'role' => 'GUIDANCE COUNSELOR',  'email' => 'rgborje@feutech.edu.ph',    'programs' => ['BSCE','BSCEM','BSCPE','BSECE'],               'photo' => 'borje.png'],
  ['name' => 'Vilma R. Colinco',           'role' => 'GUIDANCE COUNSELOR',  'email' => 'vrcolinco@feutech.edu.ph',  'programs' => ['BSITSMBA','BSCYBER','BSMFGE','BSCE'],         'photo' => 'Colinco.png'],
  ['name' => 'Charlene Marie A. Arabejo',  'role' => 'GUIDANCE COUNSELOR',  'email' => 'caarabejo@feutech.edu.ph',  'programs' => ['BSITSMBA','BSCYBER'],                          'photo' => 'Arabejo.png'],
  ['name' => 'Moira Ashley C. Roy',        'role' => 'PSYCHOMETRICIAN',     'email' => 'mcroy@feutech.edu.ph',      'programs' => ['BSMFGE','BSCE','BSITWMA','BSITAGD'],          'photo' => 'roy.png'],
  ['name' => 'Paula Trisha D. Balcera',   'role' => 'GUIDANCE COUNSELOR',  'email' => 'pdbalcera@feutech.edu.ph',  'programs' => ['BSITWMA','BSITAGD'],                           'photo' => 'balcera.png'],
];
?>
<section class="bg-light py-20">
  <div class="container">

    <div class="text-center mb-15">
      <span class="badge badge-light-primary fs-9 ls-2 text-uppercase fw-bold py-2 px-4 mb-4">MEET THE TEAM</span>
      <h2 class="fw-bolder fs-2x mb-4">Our <span class="text-primary">Counselors</span></h2>
      <p class="text-gray-600 fs-5 mw-500px mx-auto">Meet our dedicated team of professionals ready to support your wellness journey</p>
    </div>

    <!-- Top row: 3 counselors -->
    <div class="row g-5 row-cols-1 row-cols-md-3 mb-5">
      <?php foreach (array_slice($team, 0, 3) as $m): ?>
      <div class="col">
        <div class="card card-bordered overflow-hidden h-100 hover-elevate-up">
          <div class="ratio ratio-1x1 overflow-hidden">
            <img src="<?= htmlspecialchars($photoBase . '/' . $m['photo']) ?>"
                 alt="<?= htmlspecialchars($m['name']) ?>"
                 class="object-fit-cover w-100 h-100 position-absolute top-0 start-0">
          </div>
          <div class="card-body p-6">
            <span class="badge badge-light-primary fs-9 text-uppercase ls-1 mb-3"><?= htmlspecialchars($m['role']) ?></span>
            <h3 class="fw-bold fs-4 mb-1"><?= htmlspecialchars($m['name']) ?></h3>
            <a href="mailto:<?= htmlspecialchars($m['email']) ?>" class="text-gray-600 fs-7 d-block mb-4"><?= htmlspecialchars($m['email']) ?></a>
            <div class="separator mb-4"></div>
            <div class="text-gray-500 fs-9 fw-bold text-uppercase ls-1 mb-3">Assigned Programs</div>
            <div class="d-flex flex-wrap gap-2">
              <?php foreach ($m['programs'] as $p): ?>
              <span class="badge badge-light fs-9 fw-semibold"><?= htmlspecialchars($p) ?></span>
              <?php endforeach; ?>
            </div>
            <a href="mailto:<?= htmlspecialchars($m['email']) ?>" class="btn btn-light-primary btn-sm fw-semibold mt-4 w-100">
              <i class="ki-duotone ki-messages fs-6 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
              Get in Touch
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom row: 2 counselors centered -->
    <div class="row g-5 row-cols-1 row-cols-md-3 justify-content-center">
      <?php foreach (array_slice($team, 3, 2) as $m): ?>
      <div class="col">
        <div class="card card-bordered overflow-hidden h-100 hover-elevate-up">
          <div class="ratio ratio-1x1 overflow-hidden">
            <img src="<?= htmlspecialchars($photoBase . '/' . $m['photo']) ?>"
                 alt="<?= htmlspecialchars($m['name']) ?>"
                 class="object-fit-cover w-100 h-100 position-absolute top-0 start-0">
          </div>
          <div class="card-body p-6">
            <span class="badge badge-light-primary fs-9 text-uppercase ls-1 mb-3"><?= htmlspecialchars($m['role']) ?></span>
            <h3 class="fw-bold fs-4 mb-1"><?= htmlspecialchars($m['name']) ?></h3>
            <a href="mailto:<?= htmlspecialchars($m['email']) ?>" class="text-gray-600 fs-7 d-block mb-4"><?= htmlspecialchars($m['email']) ?></a>
            <div class="separator mb-4"></div>
            <div class="text-gray-500 fs-9 fw-bold text-uppercase ls-1 mb-3">Assigned Programs</div>
            <div class="d-flex flex-wrap gap-2">
              <?php foreach ($m['programs'] as $p): ?>
              <span class="badge badge-light fs-9 fw-semibold"><?= htmlspecialchars($p) ?></span>
              <?php endforeach; ?>
            </div>
            <a href="mailto:<?= htmlspecialchars($m['email']) ?>" class="btn btn-light-primary btn-sm fw-semibold mt-4 w-100">
              <i class="ki-duotone ki-messages fs-6 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
              Get in Touch
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
