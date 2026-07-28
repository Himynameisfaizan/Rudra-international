<?php
$pageTitle = "About Us";
 include ("./include/header.php"); 
 include ("./include/breadcrumb.php");
?>


<!-- =======================
     Section 1: Our Story
======================== -->
<section class="about-story py-5">
    <div class="container py-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 animate-fade-up">
                <!-- Replace with your actual image path -->
                <div class="about-img-wrapper">
                    <img src="assets/images/product/p-1.png" alt="Rudra International Farm" class="img-fluid rounded-4 shadow-lg">
                    <div class="experience-badge">
                        <span class="years">10+</span>
                        <span class="text">Years of<br>Excellence</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5 animate-fade-up delay-1">
                <h5 class="theme-subtitle">Welcome to Rudra International</h5>
                <h2 class="theme-title mb-4">Delivering Nature's Best, Directly to Your Table</h2>
                <p class="lead text-muted">We are passionate about cultivating and exporting the finest quality organic potatoes worldwide. Our journey started with a simple vision: to bring healthy, farm-fresh produce to every household.</p>
                <p class="text-muted mb-4">At Rudra International, we believe in sustainable farming. We work closely with local farmers, combining traditional wisdom with modern agricultural practices to ensure that every potato that reaches you is packed with nutrition and taste. From golden russets to baby potatoes, our strict quality control guarantees excellence.</p>
                <a href="contact.php" class="btn btn-theme-primary btn-lg rounded px-4 py-2">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

<!-- =======================
     Section 2: Mission & Vision
======================== -->
<section class="about-mission py-5 bg-theme-soft">
    <div class="container py-lg-4">
        <div class="row g-4">
            <!-- Mission Card -->
            <div class="col-md-6 animate-fade-up">
                <div class="mission-card p-5 bg-white rounded-4 shadow-sm h-100">
                    <div class="icon-box mb-4">
                        <i class="bi bi-bullseye"></i> <!-- Use Bootstrap icons or any SVG -->
                    </div>
                    <h3 class="h4 font-weight-bold mb-3">Our Mission</h3>
                    <p class="text-muted mb-0">To consistently deliver premium quality, organically grown potatoes while empowering local farming communities and maintaining the highest standards of environmental sustainability and food safety.</p>
                </div>
            </div>
            <!-- Vision Card -->
            <div class="col-md-6 animate-fade-up delay-1">
                <div class="mission-card p-5 bg-white rounded-4 shadow-sm h-100">
                    <div class="icon-box mb-4">
                        <i class="bi bi-eye"></i>
                    </div>
                    <h3 class="h4 font-weight-bold mb-3">Our Vision</h3>
                    <p class="text-muted mb-0">To be recognized globally as the most trusted and innovative leader in the agricultural export industry, setting benchmarks for quality, reliability, and organic farming practices.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =======================
     Section 3: Why Choose Us
======================== -->
<section class="about-features py-5">
    <div class="container py-lg-5 text-center">
        <h5 class="theme-subtitle animate-fade-up">Why Choose Rudra International</h5>
        <h2 class="theme-title mb-5 animate-fade-up delay-1">Our Core Values & Quality</h2>
        
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6 animate-fade-up delay-1">
                <div class="feature-box p-4 rounded-4">
                    <div class="feature-icon mb-3">🌿</div>
                    <h5>100% Organic</h5>
                    <p class="text-muted small">Grown without harmful chemicals, keeping your health our top priority.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 animate-fade-up delay-2">
                <div class="feature-box p-4 rounded-4">
                    <div class="feature-icon mb-3">⭐</div>
                    <h5>Premium Quality</h5>
                    <p class="text-muted small">Strict grading and sorting ensure only the best potatoes make the cut.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 animate-fade-up delay-3">
                <div class="feature-box p-4 rounded-4">
                    <div class="feature-icon mb-3">🚚</div>
                    <h5>Fast Delivery</h5>
                    <p class="text-muted small">Robust supply chain to deliver fresh produce right on time.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 animate-fade-up delay-4">
                <div class="feature-box p-4 rounded-4">
                    <div class="feature-icon mb-3">🤝</div>
                    <h5>Trusted Export</h5>
                    <p class="text-muted small">Years of experience in handling international standard packaging and export.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =======================
     Section 4: Our Process 
======================== -->
<section class="about-process py-5 mb-5">
    <div class="container py-lg-4">
        <div class="process-banner rounded-4 p-5 text-center shadow-lg text-white">
            <h3 class="mb-4">From Our Farm to Your Table</h3>
            <div class="row g-4 text-center justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <h4 class="fw-bold text-white">01</h4>
                    <p class="mb-0">Organic Harvesting</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4 class="fw-bold text-white">02</h4>
                    <p class="mb-0">Quality Sorting</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4 class="fw-bold text-white">03</h4>
                    <p class="mb-0">Safe Packaging</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4 class="fw-bold text-white">04</h4>
                    <p class="mb-0">Global Shipping</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include ("./include/footer.php"); ?>

