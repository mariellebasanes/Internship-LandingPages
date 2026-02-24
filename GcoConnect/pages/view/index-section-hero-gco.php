<?php
$assetsBase = isset($GCO_BASE) ? $GCO_BASE . 'assets' : 'assets';
?>
<section class="gco-hero">
  <div class="gco-orb gco-orb-1" aria-hidden="true"></div>
  <div class="gco-orb gco-orb-2" aria-hidden="true"></div>
  <div class="gco-shape gco-shape-1" aria-hidden="true"></div>
  <div class="gco-shape gco-shape-2" aria-hidden="true"></div>

  <div class="gco-hero-inner">
    <div class="gco-hero-grid">
      <div class="gco-hero-content">
        <div class="gco-hero-badge gco-badge mb-4">Student Counseling &amp; Support</div>
        <h1 class="gco-hero-title text-white mb-4">
          Your Mental Health<br>
          <span class="text-white" style="opacity:.9">Matters</span>
        </h1>
        <p class="gco-hero-desc mb-5">
          Professional counseling services tailored for students. Connect with licensed therapists who understand your journey and are here to support your wellbeing <strong class="text-white">every step of the way.</strong>
        </p>
        <div class="d-flex flex-wrap gap-3 pt-3">
          <a href="#services" class="gco-btn-white text-decoration-none">Schedule a Session</a>
          <a href="#how-it-works" class="gco-btn-outline text-decoration-none">Learn More</a>
        </div>
        <div class="d-flex align-items-center gap-3 pt-4 mt-4">
          <div class="d-flex" style="margin-left: -0.75rem;">
            <span class="rounded-circle bg-white bg-opacity-25 border border-2 border-white d-inline-flex align-items-center justify-content-center me-2" style="width:2.5rem;height:2.5rem;font-size:0.75rem;">&#9786;</span>
            <span class="rounded-circle bg-white bg-opacity-25 border border-2 border-white d-inline-flex align-items-center justify-content-center me-2" style="width:2.5rem;height:2.5rem;font-size:0.75rem;">&#9733;</span>
            <span class="rounded-circle bg-white bg-opacity-25 border border-2 border-white d-inline-flex align-items-center justify-content-center" style="width:2.5rem;height:2.5rem;font-size:0.75rem;">&#128170;</span>
          </div>
          <div class="small text-white" style="opacity:.9">
            <div class="fw-semibold">Join 1000+ students</div>
            <div style="opacity:.8">already taking care of their mental health</div>
          </div>
        </div>
      </div>
      <div class="gco-img-wrap">
        <img src="<?= $assetsBase ?>/img/interview.jpg" alt="Student counseling session" class="img-fluid">
      </div>
    </div>
  </div>

  <div class="gco-wave">
    <svg viewBox="0 0 1200 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,0 C300,90 900,90 1200,0 L1200,120 L0,120 Z" fill="white"/>
    </svg>
  </div>
</section>
