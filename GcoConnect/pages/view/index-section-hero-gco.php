<?php
$assetsBase = isset($GCO_BASE) ? $GCO_BASE . 'assets' : 'assets';
?>
<style>
  .gco-bg-blob {
    background-color: #ffffff !important;
    background-image: 
      radial-gradient(ellipse at 0% 40%, rgba(219,63,107, 0.05) 0%, transparent 50%),
      radial-gradient(ellipse at 100% 60%, rgba(231,102,89, 0.04) 0%, transparent 50%),
      url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23fce8ef' d='M44.7,-76.4C58.8,-69.2,71.8,-59.1,81.3,-46.5C90.8,-33.9,96.8,-18.8,97.5,-3.6C98.2,11.5,93.6,26.7,85.1,40.1C76.6,53.5,64.2,65.1,50.1,73.1C36,81.1,20.2,85.5,4.7,78.5C-10.8,71.5,-26,53.1,-40.8,44C-55.6,34.9,-70.1,35.1,-79.8,27C-89.5,18.9,-94.4,2.5,-91.9,-12.4C-89.4,-27.3,-79.5,-40.7,-67.6,-51.2C-55.7,-61.7,-41.8,-69.3,-28.3,-76.6C-14.8,-83.9,-1.7,-90.9,11.5,-87.3C24.7,-83.7,30.6,-83.6,44.7,-76.4Z' transform='translate(100 100)' /%3E%3C/svg%3E") !important;
    background-position: left center, right center, -5% 120% !important;
    background-repeat: no-repeat !important;
    background-size: 50vw 100%, 50vw 100%, 700px !important;
  }
  .gco-bg-blob-alt {
    background-color: #ffffff !important;
    background-image: 
      radial-gradient(ellipse at 100% 20%, rgba(219,63,107, 0.05) 0%, transparent 50%),
      radial-gradient(ellipse at 0% 80%, rgba(231,102,89, 0.04) 0%, transparent 50%),
      url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23fdf1ef' d='M44.7,-76.4C58.8,-69.2,71.8,-59.1,81.3,-46.5C90.8,-33.9,96.8,-18.8,97.5,-3.6C98.2,11.5,93.6,26.7,85.1,40.1C76.6,53.5,64.2,65.1,50.1,73.1C36,81.1,20.2,85.5,4.7,78.5C-10.8,71.5,-26,53.1,-40.8,44C-55.6,34.9,-70.1,35.1,-79.8,27C-89.5,18.9,-94.4,2.5,-91.9,-12.4C-89.4,-27.3,-79.5,-40.7,-67.6,-51.2C-55.7,-61.7,-41.8,-69.3,-28.3,-76.6C-14.8,-83.9,-1.7,-90.9,11.5,-87.3C24.7,-83.7,30.6,-83.6,44.7,-76.4Z' transform='translate(100 100)' /%3E%3C/svg%3E") !important;
    background-position: right top, left bottom, 105% -20% !important;
    background-repeat: no-repeat !important;
    background-size: 50vw 100%, 50vw 100%, 700px !important;
  }
</style>
<section class="bg-white overflow-hidden gco-bg-blob">
  <div class="container py-20">
    <div class="row align-items-center gy-10">

      <!-- Text content -->
      <div class="col-lg-5">
        <span class="badge bg-light-primary text-primary border border-primary border-opacity-25 fs-9 ls-2 text-uppercase fw-bold py-2 px-4 mb-6 d-inline-block">
          Student Counseling &amp; Support
        </span>
        <h1 class="text-dark fw-bolder fs-3x lh-sm mb-5">
          Your Mental Health<br>
          <span class="text-primary opacity-75">Matters</span>
        </h1>
        <p class="text-muted fs-5 mb-8">
          Professional counseling services tailored for students. Connect with licensed therapists who understand your journey and are here to support your wellbeing <strong class="text-dark">every step of the way.</strong>
        </p>
        <div class="d-flex flex-wrap gap-3 mb-8">
          <a href="#services"
             class="btn btn-primary d-inline-flex align-items-center gap-2
                    rounded-pill px-6 py-3 fw-bold fs-6
                    text-decoration-none shadow-sm">
            <i class="ki-duotone ki-calendar-2 fs-5 text-white">
              <span class="path1"></span><span class="path2"></span>
              <span class="path3"></span><span class="path4"></span><span class="path5"></span>
            </i>
            Schedule a Session
          </a>
          <a href="#how-it-works"
             class="btn btn-light-primary d-inline-flex align-items-center gap-2 rounded-pill px-6 py-3
                    border border-2 border-primary border-opacity-25
                    fw-bold fs-6 text-decoration-none">
            Learn More
            <i class="ki-duotone ki-arrow-right fs-5 text-primary">
              <span class="path1"></span><span class="path2"></span>
            </i>
          </a>
        </div>

        <div class="d-inline-flex align-items-center gap-4 bg-light bg-opacity-50 border border-2 border-gray-200 rounded-pill px-6 py-3 shadow-sm">
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
            <div class="text-dark fw-bold fs-6 lh-1 mb-1">Join 1000+ students</div>
            <div class="text-muted fw-semibold fs-8">already taking care of their mental health</div>
          </div>
        </div>
      </div>

      <!-- Hero Animation -->
      <div class="col-lg-7 d-flex justify-content-center">
        <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.9.3/dist/dotlottie-wc.js" type="module"></script>
        <dotlottie-wc src="https://lottie.host/177811db-3257-4256-8c80-74ba7bd7b915/5MFiKBwwD5.lottie" style="width: 100%; max-width: 600px; height: 600px;" autoplay loop></dotlottie-wc>
      </div>

    </div>
  </div>
</section>
