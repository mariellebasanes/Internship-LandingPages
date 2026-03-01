<?php
$BASE = isset($ICARE_BASE) ? $ICARE_BASE : '/Icare/Icare';
?>
<section id="events" class="py-15 py-lg-20 bg-white">
  <div class="app-container container-xxl">
    
    <!-- Section Header -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-12 mb-lg-16 gap-6">
        <div class="icare-max-w-lg">
            <span class="badge rounded-pill px-4 py-2 fs-7 fw-bolder text-uppercase tracking-wider shadow-sm mb-6" style="background-color: var(--icare-green); color: white;">
                <i class="ki-outline ki-calendar-8 fs-5 me-2 text-white"></i> Academic Events
            </span>
            <h2 class="display-5 fw-bolder text-dark mb-4 lh-sm">
                Upcoming <span class="position-relative d-inline-block">
                    <span class="position-relative z-index-1" style="color: var(--icare-green);">Sessions & Workshops</span>
                    <span class="position-absolute bottom-0 start-0 w-100 h-8px opacity-25 translate-middle-y" style="background-color: var(--icare-yellow);"></span>
                </span>
            </h2>
            <p class="fs-4 text-muted fw-medium lh-lg mb-0">
                Engage in our upcoming workshops, review sessions, and academic seminars designed to enhance your learning experience.
            </p>
        </div>
        <div>
            <a href="#" class="btn btn-outline btn-outline-dashed btn-outline-default text-white border-white border-opacity-50 border-hover-white text-hover-dark bg-hover-white fw-bolder px-8 py-3 rounded-pill d-inline-flex align-items-center gap-2">
                View All Events <i class="ki-outline ki-arrow-right fs-4"></i>
            </a>
        </div>
    </div>

    <!-- Events Grid -->
    <div class="row g-6 g-lg-10">
        
        <!-- Event 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm hover-elevate-up transition-all rounded-4 overflow-hidden bg-white">
                <div class="card-body p-6 p-lg-8 d-flex flex-column">
                    <!-- Date & Type Badge -->
                    <div class="d-flex align-items-center mb-6">
                        <div class="d-flex flex-column align-items-center justify-content-center rounded-3 px-4 py-3 me-5 bg-light-warning border border-warning border-dashed">
                            <span class="fs-2 fw-bolder text-warning">15</span>
                            <span class="fs-7 fw-bolder text-uppercase text-warning">Oct</span>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="badge badge-light-success fw-bolder px-3 py-1 mb-2 align-self-start">Workshop</span>
                            <span class="fs-7 fw-bold text-muted d-flex align-items-center">
                                <i class="ki-outline ki-time fs-6 me-1"></i> 2:00 PM - 4:00 PM
                            </span>
                        </div>
                    </div>
                    
                    <a href="#" class="fs-3 fw-bolder text-dark text-hover-success lh-base mb-3 d-block">
                        Advanced Data Structures Workshop
                    </a>
                    
                    <p class="fs-6 text-muted mb-6 flex-grow-1">
                        An intensive hands-on session focusing on advanced tree topologies and graph algorithms.
                    </p>

                    <div class="d-flex align-items-center text-gray-800 fs-7 fw-bold mt-auto pe-2">
                        <div class="w-30px h-30px rounded bg-light d-flex align-items-center justify-content-center me-3">
                            <i class="ki-outline ki-geolocation fs-5" style="color: var(--icare-green);"></i>
                        </div>
                        FEU Tech Building, Room 502
                    </div>
                </div>
                <div class="card-footer border-top border-gray-100 p-6 p-lg-8 bg-light d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <div class="symbol-group symbol-hover">
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Dr. Maria Santos">
                            <img alt="Pic" src="<?php echo htmlspecialchars($BASE); ?>/assets/svg/blank-image.svg" />
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Prof. James Rodriguez">
                            <img alt="Pic" src="<?php echo htmlspecialchars($BASE); ?>/assets/svg/blank-image.svg" />
                        </div>
                        <div class="symbol symbol-35px symbol-circle">
                            <span class="symbol-label bg-light-success text-success fs-8 fw-bold">+3</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-sm btn-primary fw-bolder" style="background-color: var(--icare-green); border-color: var(--icare-green);">Register</a>
                </div>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm hover-elevate-up transition-all rounded-4 overflow-hidden bg-white">
                <div class="card-body p-6 p-lg-8 d-flex flex-column">
                    <div class="d-flex align-items-center mb-6">
                        <div class="d-flex flex-column align-items-center justify-content-center rounded-3 px-4 py-3 me-5 bg-light-success border border-success border-dashed">
                            <span class="fs-2 fw-bolder text-success">22</span>
                            <span class="fs-7 fw-bolder text-uppercase text-success">Oct</span>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="badge badge-light-warning fw-bolder px-3 py-1 mb-2 align-self-start text-dark">Review Session</span>
                            <span class="fs-7 fw-bold text-muted d-flex align-items-center">
                                <i class="ki-outline ki-time fs-6 me-1"></i> 10:00 AM - 12:00 PM
                            </span>
                        </div>
                    </div>
                    
                    <a href="#" class="fs-3 fw-bolder text-dark text-hover-success lh-base mb-3 d-block">
                        Midterm Examination Review: Calculus 2
                    </a>
                    
                    <p class="fs-6 text-muted mb-6 flex-grow-1">
                        Comprehensive review of integration techniques and applications of definite integrals.
                    </p>

                    <div class="d-flex align-items-center text-gray-800 fs-7 fw-bold mt-auto pe-2">
                        <div class="w-30px h-30px rounded bg-light d-flex align-items-center justify-content-center me-3">
                            <i class="ki-outline ki-monitor-mobile fs-5" style="color: var(--icare-yellow);"></i>
                        </div>
                        Virtual Session (Zoom)
                    </div>
                </div>
                <div class="card-footer border-top border-gray-100 p-6 p-lg-8 bg-light d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <div class="symbol-group symbol-hover">
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Dr. Anna Lim">
                            <img alt="Pic" src="<?php echo htmlspecialchars($BASE); ?>/assets/svg/blank-image.svg" />
                        </div>
                        <div class="symbol symbol-35px symbol-circle">
                            <span class="symbol-label bg-light-warning text-dark fs-8 fw-bold">+12</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-sm btn-light-success fw-bolder">Join Link</a>
                </div>
            </div>
        </div>

        <!-- Event 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm hover-elevate-up transition-all rounded-4 overflow-hidden bg-white">
                <div class="card-body p-6 p-lg-8 d-flex flex-column">
                    <div class="d-flex align-items-center mb-6">
                        <div class="d-flex flex-column align-items-center justify-content-center rounded-3 px-4 py-3 me-5 bg-light-primary border border-primary border-dashed">
                            <span class="fs-2 fw-bolder text-primary">05</span>
                            <span class="fs-7 fw-bolder text-uppercase text-primary">Nov</span>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="badge badge-light-primary fw-bolder px-3 py-1 mb-2 align-self-start">Seminar</span>
                            <span class="fs-7 fw-bold text-muted d-flex align-items-center">
                                <i class="ki-outline ki-time fs-6 me-1"></i> 1:00 PM - 5:00 PM
                            </span>
                        </div>
                    </div>
                    
                    <a href="#" class="fs-3 fw-bolder text-dark text-hover-primary lh-base mb-3 d-block">
                        Industry Best Practices in Web Dev
                    </a>
                    
                    <p class="fs-6 text-muted mb-6 flex-grow-1">
                        Guest speakers from top tech companies talk about modern web architectures and frameworks.
                    </p>

                    <div class="d-flex align-items-center text-gray-800 fs-7 fw-bold mt-auto pe-2">
                        <div class="w-30px h-30px rounded bg-light d-flex align-items-center justify-content-center me-3">
                            <i class="ki-outline ki-geolocation fs-5 text-primary"></i>
                        </div>
                        Auditorium, 8th Floor
                    </div>
                </div>
                <div class="card-footer border-top border-gray-100 p-6 p-lg-8 bg-light d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <div class="symbol-group symbol-hover">
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Guest Speaker">
                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">GS</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle">
                            <span class="symbol-label bg-light-primary text-primary fs-8 fw-bold">+45</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-sm btn-light-primary fw-bolder">Register</a>
                </div>
            </div>
        </div>

    </div>
  </div>
</section>
