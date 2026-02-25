<?php
$assetsBase = isset($GCO_BASE) ? $GCO_BASE . 'assets' : 'assets';
?>
<section class="bg-gco overflow-hidden">
  <div class="container py-20">
    <div class="row align-items-center gy-10">

      <!-- Text content -->
      <div class="col-lg-5">
        <span class="badge bg-white bg-opacity-25 text-white border border-white border-opacity-50 fs-9 ls-2 text-uppercase fw-bold py-2 px-4 mb-6 d-inline-block">
          Student Counseling &amp; Support
        </span>
        <h1 class="text-white fw-bolder fs-3x lh-sm mb-5">
          Your Mental Health<br>
          <span class="text-white opacity-75">Matters</span>
        </h1>
        <p class="text-white opacity-75 fs-5 mb-8">
          Professional counseling services tailored for students. Connect with licensed therapists who understand your journey and are here to support your wellbeing <strong class="text-white">every step of the way.</strong>
        </p>
        <div class="d-flex flex-wrap gap-3 mb-8">
          <a href="#services"
             class="gco-btn-primary d-inline-flex align-items-center gap-2
                    rounded-pill px-6 py-3 bg-white fw-bold fs-6
                    text-decoration-none shadow-sm">
            <i class="ki-duotone ki-calendar-2 fs-5">
              <span class="path1"></span><span class="path2"></span>
              <span class="path3"></span><span class="path4"></span><span class="path5"></span>
            </i>
            Schedule a Session
          </a>
          <a href="#how-it-works"
             class="d-inline-flex align-items-center gap-2 rounded-pill px-6 py-3
                    border border-2 border-white bg-white bg-opacity-25
                    text-white fw-bold fs-6 text-decoration-none">
            Learn More
            <i class="ki-duotone ki-arrow-right fs-5 text-white">
              <span class="path1"></span><span class="path2"></span>
            </i>
          </a>
        </div>

        <div class="d-inline-flex align-items-center gap-4 bg-white bg-opacity-25 border border-2 border-white border-opacity-50 rounded-pill px-6 py-3">
          <div class="symbol-group symbol-hover">
            <div class="symbol symbol-35px symbol-circle">
              <span class="symbol-label bg-primary border border-2 border-white">
                <i class="ki-duotone ki-heart fs-6 text-white"><span class="path1"></span><span class="path2"></span></i>
              </span>
            </div>
            <div class="symbol symbol-35px symbol-circle">
              <span class="symbol-label bg-danger border border-2 border-white">
                <i class="ki-duotone ki-medal-star fs-6 text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
              </span>
            </div>
            <div class="symbol symbol-35px symbol-circle">
              <span class="symbol-label bg-primary border border-2 border-white">
                <i class="ki-duotone ki-people fs-6 text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
              </span>
            </div>
          </div>
          <div>
            <div class="text-white fw-bold fs-6 lh-1 mb-1">Join 1000+ students</div>
            <div class="text-white fw-semibold fs-8">already taking care of their mental health</div>
          </div>
        </div>
      </div>

      <!-- Hero GIF -->
      <div class="col-lg-7 d-flex justify-content-center">
        <img src="<?= $assetsBase ?>/img/Animated-hero-image/mental health.gif"
             alt="Student counseling session"
             class="w-100 img-fluid">
      </div>

    </div>
  </div>
</section>
