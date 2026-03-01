<?php
$BASE = isset($ICARE_BASE) ? $ICARE_BASE : '/Icare/Icare';
?>
<section id="directory" class="py-15 py-lg-20 position-relative" style="background-color: var(--icare-green);">
  <div class="app-container container-xxl">
    
    <!-- Section Header -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-12 mb-lg-16 gap-6">
        <div class="icare-max-w-lg">
            <span class="badge rounded-pill px-4 py-2 fs-7 fw-bolder text-uppercase tracking-wider shadow-sm mb-6" style="background-color: rgba(253, 188, 23, 0.1); color: var(--icare-yellow);">
                <i class="ki-outline ki-profile-user fs-5 me-2" style="color: var(--icare-yellow);"></i> Mentorship Directory
            </span>
            <h2 class="display-5 fw-bolder text-white mb-4 lh-sm">
                Distinguished <span class="position-relative d-inline-block">
                    <span class="position-relative z-index-1" style="color: var(--icare-yellow);">Faculty & Mentors</span>
                    <span class="position-absolute bottom-0 start-0 w-100 h-8px opacity-25 translate-middle-y" style="background-color: var(--icare-yellow);"></span>
                </span>
            </h2>
            <p class="fs-4 text-white opacity-90 fw-medium lh-lg mb-0">
                Our pedagogical team comprises accomplished faculty members alongside rigorously vetted peer mentors who have demonstrated exceptional academic proficiency.
            </p>
        </div>
        <div>
            <a href="#" class="btn btn-outline btn-outline-dashed btn-outline-success fw-bolder px-8 py-3 rounded-pill d-inline-flex align-items-center gap-2">
                View Full Directory <i class="ki-outline ki-arrow-right fs-4"></i>
            </a>
        </div>
    </div>

    <!-- Mentor Carousel -->
    <div id="kt_mentors_carousel" class="carousel carousel-custom slide" data-bs-ride="carousel" data-bs-interval="8000">
        <!-- Carousel Indicators -->
        <div class="d-flex align-items-center justify-content-center mb-8">
            <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                <li data-bs-target="#kt_mentors_carousel" data-bs-slide-to="0" class="ms-1 active"></li>
                <li data-bs-target="#kt_mentors_carousel" data-bs-slide-to="1" class="ms-1"></li>
            </ol>
        </div>

        <div class="carousel-inner pt-2 pb-10">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row g-6 g-lg-10">
                    <!-- Faculty 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm hover-elevate-up transition-all rounded-4 overflow-hidden bg-white">
                            <!-- Card Body -->
                            <div class="card-body p-8 p-lg-10 text-center">
                                <div class="symbol symbol-150px symbol-circle mb-6 bg-light">
                                    <img src="<?php echo htmlspecialchars($BASE); ?>/assets/img/team/team-mbgarcia.png" class="object-fit-cover shadow-sm border border-4 border-white" alt="Dr. Macario G. Garcia" />
                                </div>
                                
                                <h3 class="fs-4 fw-bolder text-dark mb-1">Dr. Macario B. Garcia</h3>
                                <span class="fs-6 fw-bold mb-4 d-block" style="color: var(--icare-green);">Program Director</span>
                                
                                <div class="d-flex align-items-center justify-content-center gap-2 mb-8">
                                    <a href="#" class="btn btn-icon btn-light-success btn-sm rounded-circle"><i class="ki-outline ki-sms fs-5"></i></a>
                                    <a href="#" class="btn btn-icon btn-light-primary btn-sm rounded-circle"><i class="ki-outline ki-linkedin fs-5"></i></a>
                                </div>

                                <div class="d-flex justify-content-center flex-wrap gap-2 mb-0">
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Mathematics</span>
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Physics</span>
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Statistics</span>
                                </div>
                            </div>
                            <div class="card-footer border-top border-gray-100 p-4 text-center bg-light">
                                <a href="#" class="btn btn-sm btn-link text-success fw-bold p-0">View Full Profile</a>
                            </div>
                        </div>
                    </div>

                    <!-- Faculty 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm hover-elevate-up transition-all rounded-4 overflow-hidden bg-white">
                            <!-- Card Body -->
                            <div class="card-body p-8 p-lg-10 text-center">
                                <div class="symbol symbol-150px symbol-circle mb-6 bg-light">
                                    <img src="<?php echo htmlspecialchars($BASE); ?>/assets/img/team/team-radao.jpg" class="object-fit-cover shadow-sm border border-4 border-white" alt="Prof. Rossana A. Adao" />
                                </div>
                                
                                <h3 class="fs-4 fw-bolder text-dark mb-1">Prof. Rossana A. Adao</h3>
                                <span class="fs-6 fw-bold mb-4 d-block" style="color: var(--icare-green);">Lead Academic Tutor</span>
                                
                                <div class="d-flex align-items-center justify-content-center gap-2 mb-8">
                                    <a href="#" class="btn btn-icon btn-light-success btn-sm rounded-circle"><i class="ki-outline ki-sms fs-5"></i></a>
                                    <a href="#" class="btn btn-icon btn-light-primary btn-sm rounded-circle"><i class="ki-outline ki-linkedin fs-5"></i></a>
                                </div>

                                <div class="d-flex justify-content-center flex-wrap gap-2 mb-0">
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Computer Science</span>
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Programming</span>
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Data Structures</span>
                                </div>
                            </div>
                            <div class="card-footer border-top border-gray-100 p-4 text-center bg-light">
                                <a href="#" class="btn btn-sm btn-link text-success fw-bold p-0">View Full Profile</a>
                            </div>
                        </div>
                    </div>

                    <!-- Faculty 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm hover-elevate-up transition-all rounded-4 overflow-hidden bg-white">
                            <!-- Card Body -->
                            <div class="card-body p-8 p-lg-10 text-center">
                                <div class="symbol symbol-150px symbol-circle mb-6 bg-light">
                                    <img src="<?php echo htmlspecialchars($BASE); ?>/assets/img/team/team-onualat.png" class="object-fit-cover shadow-sm border border-4 border-white" alt="Dr. Oscar Nualat" />
                                </div>
                                
                                <h3 class="fs-4 fw-bolder text-dark mb-1">Dr. Oscar Nualat</h3>
                                <span class="fs-6 fw-bold mb-4 d-block" style="color: var(--icare-green);">Academic Coordinator</span>
                                
                                <div class="d-flex align-items-center justify-content-center gap-2 mb-8">
                                    <a href="#" class="btn btn-icon btn-light-success btn-sm rounded-circle"><i class="ki-outline ki-sms fs-5"></i></a>
                                    <a href="#" class="btn btn-icon btn-light-primary btn-sm rounded-circle"><i class="ki-outline ki-linkedin fs-5"></i></a>
                                </div>

                                <div class="d-flex justify-content-center flex-wrap gap-2 mb-0">
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Database Systems</span>
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Information Systems</span>
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Web Dev</span>
                                </div>
                            </div>
                            <div class="card-footer border-top border-gray-100 p-4 text-center bg-light">
                                <a href="#" class="btn btn-sm btn-link text-success fw-bold p-0">View Full Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row g-6 g-lg-10">
                    <!-- Faculty 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm hover-elevate-up transition-all rounded-4 overflow-hidden bg-white">
                            <!-- Card Body -->
                            <div class="card-body p-8 p-lg-10 text-center">
                                <div class="symbol symbol-150px symbol-circle mb-6 bg-light">
                                    <img src="<?php echo htmlspecialchars($BASE); ?>/assets/img/team/team-epbacasmo.jpg" class="object-fit-cover shadow-sm border border-4 border-white" alt="E. Bacasmo" />
                                </div>
                                
                                <h3 class="fs-4 fw-bolder text-dark mb-1">E. Bacasmo</h3>
                                <span class="fs-6 fw-bold mb-4 d-block" style="color: var(--icare-green);">Senior Reviewer</span>
                                
                                <div class="d-flex align-items-center justify-content-center gap-2 mb-8">
                                    <a href="#" class="btn btn-icon btn-light-success btn-sm rounded-circle"><i class="ki-outline ki-sms fs-5"></i></a>
                                    <a href="#" class="btn btn-icon btn-light-primary btn-sm rounded-circle"><i class="ki-outline ki-linkedin fs-5"></i></a>
                                </div>

                                <div class="d-flex justify-content-center flex-wrap gap-2 mb-0">
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Electronics</span>
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Circuits</span>
                                </div>
                            </div>
                            <div class="card-footer border-top border-gray-100 p-4 text-center bg-light">
                                <a href="#" class="btn btn-sm btn-link text-success fw-bold p-0">View Full Profile</a>
                            </div>
                        </div>
                    </div>

                    <!-- Faculty 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm hover-elevate-up transition-all rounded-4 overflow-hidden bg-white">
                            <!-- Card Body -->
                            <div class="card-body p-8 p-lg-10 text-center">
                                <div class="symbol symbol-150px symbol-circle mb-6 bg-light">
                                    <img src="<?php echo htmlspecialchars($BASE); ?>/assets/img/team/team-vpfollosco.jpg" class="object-fit-cover shadow-sm border border-4 border-white" alt="V. Follosco" />
                                </div>
                                
                                <h3 class="fs-4 fw-bolder text-dark mb-1">V. Follosco</h3>
                                <span class="fs-6 fw-bold mb-4 d-block" style="color: var(--icare-green);">Review Specialist</span>
                                
                                <div class="d-flex align-items-center justify-content-center gap-2 mb-8">
                                    <a href="#" class="btn btn-icon btn-light-success btn-sm rounded-circle"><i class="ki-outline ki-sms fs-5"></i></a>
                                    <a href="#" class="btn btn-icon btn-light-primary btn-sm rounded-circle"><i class="ki-outline ki-linkedin fs-5"></i></a>
                                </div>

                                <div class="d-flex justify-content-center flex-wrap gap-2 mb-0">
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Operations</span>
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Management</span>
                                </div>
                            </div>
                            <div class="card-footer border-top border-gray-100 p-4 text-center bg-light">
                                <a href="#" class="btn btn-sm btn-link text-success fw-bold p-0">View Full Profile</a>
                            </div>
                        </div>
                    </div>

                    <!-- Faculty 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm hover-elevate-up transition-all rounded-4 overflow-hidden bg-white">
                            <!-- Card Body -->
                            <div class="card-body p-8 p-lg-10 text-center">
                                <div class="symbol symbol-150px symbol-circle mb-6 bg-light">
                                    <img src="<?php echo htmlspecialchars($BASE); ?>/assets/img/team/team-jfventura.jpg" class="object-fit-cover shadow-sm border border-4 border-white" alt="J. Ventura" />
                                </div>
                                
                                <h3 class="fs-4 fw-bolder text-dark mb-1">J. Ventura</h3>
                                <span class="fs-6 fw-bold mb-4 d-block" style="color: var(--icare-green);">Academic Guide</span>
                                
                                <div class="d-flex align-items-center justify-content-center gap-2 mb-8">
                                    <a href="#" class="btn btn-icon btn-light-success btn-sm rounded-circle"><i class="ki-outline ki-sms fs-5"></i></a>
                                    <a href="#" class="btn btn-icon btn-light-primary btn-sm rounded-circle"><i class="ki-outline ki-linkedin fs-5"></i></a>
                                </div>

                                <div class="d-flex justify-content-center flex-wrap gap-2 mb-0">
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">IT Infrastructure</span>
                                    <span class="badge badge-light-success px-3 py-2 fs-8 fw-bolder rounded-pill">Networking</span>
                                </div>
                            </div>
                            <div class="card-footer border-top border-gray-100 p-4 text-center bg-light">
                                <a href="#" class="btn btn-sm btn-link text-success fw-bold p-0">View Full Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
