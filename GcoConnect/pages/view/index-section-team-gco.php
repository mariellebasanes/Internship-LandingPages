<?php
$assetsBase = 'pages/assets';
// Photo assets for GCO team members
$photoBase = isset($GCO_BASE)
  ? $GCO_BASE . 'assets/img/GCO Assets/gco faculties'
  : 'assets/img/GCO Assets/gco faculties';
$team = [
  [
    'name' => 'Rochile G. Borje',
    'role' => 'GUIDANCE COUNSELOR',
    'email' => 'rgborje@feutech.edu.ph',
    'programs' => ['BSCE', 'BSCEM', 'BSCPE', 'BSECE'],
    'photo' => 'borje.png',
  ],
  [
    'name' => 'Vilma R. Colinco',
    'role' => 'GUIDANCE COUNSELOR',
    'email' => 'vrcolinco@feutech.edu.ph',
    'programs' => ['BSITSMBA', 'BSCYBER', 'BSMFGE', 'BSCE'],
    'photo' => 'Colinco.png',
  ],
  [
    'name' => 'Charlene Marie A. Arabejo',
    'role' => 'GUIDANCE COUNSELOR',
    'email' => 'caarabejo@feutech.edu.ph',
    'programs' => ['BSITSMBA', 'BSCYBER'],
    'photo' => 'Arabejo.png',
  ],
  [
    'name' => 'Moira Ashley C. Roy',
    'role' => 'PSYCHOMETRICIAN',
    'email' => 'mcroy@feutech.edu.ph',
    'programs' => ['BSMFGE', 'BSCE', 'BSITWMA', 'BSITAGD'],
    'photo' => 'roy.png',
  ],
  [
    'name' => 'Paula Trisha D. Balcera',
    'role' => 'GUIDANCE COUNSELOR',
    'email' => 'pdbalcera@feutech.edu.ph',
    'programs' => ['BSITWMA', 'BSITAGD'],
    'photo' => 'balcera.png',
  ],
];
?>
<section class="gco-section gco-team position-relative">
  <div class="gco-container">
    <div class="text-center mb-5">
      <span class="gco-badge gco-badge-light">MEET THE TEAM</span>
      <h2 class="gco-heading-xl mt-3 mb-3">Our <span class="gco-heading-highlight">Counselors</span></h2>
      <p class="gco-text-muted mx-auto" style="max-width:36rem;">Meet our dedicated team of professionals ready to support your <span class="gco-heading-highlight">wellness journey</span></p>
    </div>
    <div class="gco-grid-3 mb-5">
      <?php foreach (array_slice($team, 0, 3) as $m): ?>
      <div class="gco-team-card">
        <div class="gco-team-img">
          <?php if (!empty($m['photo'])): ?>
          <img src="<?= htmlspecialchars($photoBase . '/' . $m['photo']) ?>" alt="<?= htmlspecialchars($m['name']) ?>">
          <?php else: ?>
          <img src="<?= $assetsBase ?>/img/logo/icon-gco-connect.svg" alt="" role="presentation" style="object-fit:contain;padding:3rem;background:linear-gradient(135deg, var(--gco-primary), var(--gco-secondary));">
          <?php endif; ?>
          <div class="gco-team-overlay"></div>
          <div class="position-absolute bottom-0 start-0 end-0 p-4 text-white">
            <span class="gco-team-role"><?= htmlspecialchars($m['role']) ?></span>
            <h3 class="gco-team-name"><?= htmlspecialchars($m['name']) ?></h3>
            <a href="mailto:<?= htmlspecialchars($m['email']) ?>" class="gco-team-email text-decoration-none"><?= htmlspecialchars($m['email']) ?></a>
          </div>
        </div>
        <div class="gco-team-body">
          <div class="small fw-semibold text-secondary text-uppercase mb-2">Assigned Programs</div>
          <div class="gco-team-programs">
            <?php foreach ($m['programs'] as $p): ?><span class="gco-team-prog-tag"><?= htmlspecialchars($p) ?></span><?php endforeach; ?>
          </div>
          <a href="mailto:<?= htmlspecialchars($m['email']) ?>" class="gco-team-cta">Get in Touch</a>
        </div>
        <div style="height:6px;background:linear-gradient(to right, var(--gco-primary), var(--gco-secondary));"></div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="gco-grid-2">
      <?php foreach (array_slice($team, 3, 2) as $m): ?>
      <div class="gco-team-card">
        <div class="gco-team-img">
          <?php if (!empty($m['photo'])): ?>
          <img src="<?= htmlspecialchars($photoBase . '/' . $m['photo']) ?>" alt="<?= htmlspecialchars($m['name']) ?>">
          <?php else: ?>
          <img src="<?= $assetsBase ?>/img/logo/icon-gco-connect.svg" alt="" role="presentation" style="object-fit:contain;padding:3rem;background:linear-gradient(135deg, var(--gco-secondary), var(--gco-primary));">
          <?php endif; ?>
          <div class="gco-team-overlay"></div>
          <div class="position-absolute bottom-0 start-0 end-0 p-4 text-white">
            <span class="gco-team-role"><?= htmlspecialchars($m['role']) ?></span>
            <h3 class="gco-team-name"><?= htmlspecialchars($m['name']) ?></h3>
            <a href="mailto:<?= htmlspecialchars($m['email']) ?>" class="gco-team-email text-decoration-none"><?= htmlspecialchars($m['email']) ?></a>
          </div>
        </div>
        <div class="gco-team-body">
          <div class="small fw-semibold text-secondary text-uppercase mb-2">Assigned Programs</div>
          <div class="gco-team-programs">
            <?php foreach ($m['programs'] as $p): ?><span class="gco-team-prog-tag"><?= htmlspecialchars($p) ?></span><?php endforeach; ?>
          </div>
          <a href="mailto:<?= htmlspecialchars($m['email']) ?>" class="gco-team-cta">Get in Touch</a>
        </div>
        <div style="height:6px;background:linear-gradient(to right, var(--gco-primary), var(--gco-secondary));"></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
