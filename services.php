<?php 
$pageTitle = "Our Services";
include ("./include/header.php");
include ("./include/breadcrumb.php");
?>

<section class="services-section py-5 bg-theme-soft">
    <div class="container py-lg-5">
        <div class="text-center mb-5 animate-fade-up">
            <h5 class="theme-subtitle">What We Offer</h5>
            <h2 class="theme-title">Premium Agricultural Solutions</h2>
        </div>

        <div class="row g-4">
            
            <!-- Service Card 1 -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-1">
                <div class="service-card rounded-4 bg-white shadow-sm h-100">
                    <div class="img-wrapper rounded-top-4 overflow-hidden">
                        <img src="assets/images/product/p-3.png" alt="Bulk Export" class="img-fluid w-100">
                        <div class="service-icon"><i class="bi bi-globe"></i></div>
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="fw-bold mb-3">Bulk Potato Export</h4>
                        <p class="text-muted mb-4 small">We export premium quality, organically grown potatoes worldwide with strict adherence to international quality standards.</p>
                        <!-- Button triggers modal -->
                        <button type="button" class="btn btn-outline-theme rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#serviceModal1">
                            View Details <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-2">
                <div class="service-card rounded-4 bg-white shadow-sm h-100">
                    <div class="img-wrapper rounded-top-4 overflow-hidden">
                        <img src="assets/images/product/p-1.png" alt="Custom Packaging" class="img-fluid w-100">
                        <div class="service-icon"><i class="bi bi-box-seam"></i></div>
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="fw-bold mb-3">Custom Packaging</h4>
                        <p class="text-muted mb-4 small">From jute bags to mesh nets, we provide customized, ventilated packaging solutions to keep potatoes fresh during transit.</p>
                        <button type="button" class="btn btn-outline-theme rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#serviceModal2">
                            View Details <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-3">
                <div class="service-card rounded-4 bg-white shadow-sm h-100">
                    <div class="img-wrapper rounded-top-4 overflow-hidden">
                        <img src="assets/images/product/p-2.png" alt="Quality Sorting" class="img-fluid w-100">
                        <div class="service-icon"><i class="bi bi-layers"></i></div>
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="fw-bold mb-3">Quality Sorting & Grading</h4>
                        <p class="text-muted mb-4 small">Automated and manual sorting ensures that potatoes are perfectly graded by size, shape, and quality before dispatch.</p>
                        <button type="button" class="btn btn-outline-theme rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#serviceModal3">
                            View Details <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =======================
     Service Modals (Popups)
======================== -->

<!-- Modal 1 -->
<div class="modal custom-modal fade" id="serviceModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 border-0 shadow-lg">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-md-5 pt-0">
                <div class="row align-items-center">
                    <div class="col-md-5 mb-4 mb-md-0">
                        <img src="assets/images/product/p-3.png" alt="Export" class="img-fluid rounded-4 shadow-sm">
                    </div>
                    <div class="col-md-7 ps-md-4">
                        <h3 class="theme-title mb-3">Bulk Potato Export</h3>
                        <p class="text-muted">Rudra International is a trusted name in the global agricultural market. We handle large-scale bulk orders for potatoes, ensuring they are transported under optimal temperature conditions.</p>
                        <ul class="list-unstyled text-muted mt-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> 100% Organic & Certified</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> Temperature-controlled shipping</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> Timely global delivery</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> Dedicated account managers</li>
                        </ul>
                        <a href="contact.php" class="btn btn-theme-primary rounded-pill px-4 mt-3">Request a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal custom-modal fade" id="serviceModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 border-0 shadow-lg">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-md-5 pt-0">
                <div class="row align-items-center">
                    <div class="col-md-5 mb-4 mb-md-0">
                        <img src="assets/images/product/p-2.png" alt="Export" class="img-fluid rounded-4 shadow-sm">
                    </div>
                    <div class="col-md-7 ps-md-4">
                        <h3 class="theme-title mb-3">Bulk Potato Export</h3>
                        <p class="text-muted">Rudra International is a trusted name in the global agricultural market. We handle large-scale bulk orders for potatoes, ensuring they are transported under optimal temperature conditions.</p>
                        <ul class="list-unstyled text-muted mt-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> 100% Organic & Certified</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> Temperature-controlled shipping</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> Timely global delivery</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> Dedicated account managers</li>
                        </ul>
                        <a href="contact.php" class="btn btn-theme-primary rounded-pill px-4 mt-3">Request a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal custom-modal fade" id="serviceModal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 border-0 shadow-lg">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-md-5 pt-0">
                <div class="row align-items-center">
                    <div class="col-md-5 mb-4 mb-md-0">
                        <img src="assets/images/product/p-2.png" alt="Export" class="img-fluid rounded-4 shadow-sm">
                    </div>
                    <div class="col-md-7 ps-md-4">
                        <h3 class="theme-title mb-3">Bulk Potato Export</h3>
                        <p class="text-muted">Rudra International is a trusted name in the global agricultural market. We handle large-scale bulk orders for potatoes, ensuring they are transported under optimal temperature conditions.</p>
                        <ul class="list-unstyled text-muted mt-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> 100% Organic & Certified</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> Temperature-controlled shipping</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> Timely global delivery</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> Dedicated account managers</li>
                        </ul>
                        <a href="contact.php" class="btn btn-theme-primary rounded-pill px-4 mt-3">Request a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include ("./include/footer.php"); ?>