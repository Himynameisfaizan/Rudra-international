
<?php 
include ("./include/header.php"); 

// Dynamic Breadcrumb Setup
$pageTitle = "Contact Us"; 
include 'include/breadcrumb.php'; 
?>

<section class="contact-section py-5 bg-theme-soft">
    <div class="container py-lg-4">
        
        <!-- =======================
             Top: Contact Info Cards
        ======================== -->
        <div class="row g-4 mb-5 pb-4">
            <!-- Address Card -->
            <div class="col-lg-4 col-md-6 animate-fade-up">
                <div class="contact-info-card bg-white p-4 p-lg-5 rounded-4 shadow-sm text-center h-100">
                    <div class="contact-icon-box mx-auto mb-4">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Our Location</h4>
                    <p class="text-muted mb-0"> Ground Floor, Shop 
No G-5, Vishal Chambers, Old Vegetable Market Road, Dhrangadhra- 
363310, Dist: Surendranagar, Gujarat</p>
                </div>
            </div>
            
            <!-- Contact Card -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-1">
                <div class="contact-info-card bg-white p-4 p-lg-5 rounded-4 shadow-sm text-center h-100">
                    <div class="contact-icon-box mx-auto mb-4">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Call Us Directly</h4>
                    <p class="text-muted mb-2">For Sales & Export Inquiries:</p>
                    <a href="tel:+919898384868" class="fs-5 fw-bold text-theme-primary text-decoration-none">+91 98983 84868</a><br>
                </div>
            </div>
            
            <!-- Email Card -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-2">
                <div class="contact-info-card bg-white p-4 p-lg-5 rounded-4 shadow-sm text-center h-100">
                    <div class="contact-icon-box mx-auto mb-4">
                        <i class="bi bi-envelope-paper"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Email Us</h4>
                    <p class="text-muted mb-2">We typically reply within 24 hours.</p>
                    <a href="mailto:rudradevexim03@gmail.com" class="fs-6 fw-bold text-theme-primary text-decoration-none d-block mb-1">rudradevexim03@gmail.com</a>
                </div>
            </div>
        </div>

        <!-- =======================
             Bottom: Form & Map
        ======================== -->
        <div class="row g-4 align-items-center bg-white rounded-4 shadow-sm overflow-hidden animate-fade-up delay-3">
            
            <!-- Left: Contact Form -->
            <div class="col-lg-6 p-4 p-lg-5">
                <div class="contact-form-wrapper pe-lg-4">
                    <h5 class="theme-subtitle mb-2">Get In Touch</h5>
                    <h2 class="theme-title mb-4">Send Us A Message</h2>
                    <p class="text-muted mb-4 pb-2">Have a question about bulk orders, export policies, or our organic potatoes? Fill out the form below and our team will get back to you.</p>
                    
                    <form action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control custom-input" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control custom-input" placeholder="Your Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control custom-input" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control custom-input" placeholder="Subject / Inquiry Type" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control custom-input" rows="5" placeholder="Write your message here..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-theme-primary rounded-pill px-5 py-3 w-100 fw-bold d-flex align-items-center justify-content-center gap-2">
                                    Send Message <i class="bi bi-send-fill"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Right: Google Map -->
            <div class="col-lg-6 p-0 h-100">
                <div class="map-wrapper h-100 min-vh-50">
                    <!-- Replace the src URL with your client's actual Google Maps Embed URL -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7345.859948198224!2d71.45409107208256!3d22.989602375522953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395963619ae7fa11%3A0x42c6be8ac0d9a74e!2sSBI%20Branch%20Old%20Veg%20Mkt%20Rd%20Dhragadhra!5e0!3m2!1sen!2sin!4v1786946171137!5m2!1sen!2sin" 
                        width="100%" 
                        height="100%" 
                        style="border:0; min-height: 500px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

    </div>
</section>


<?php include ("./include/footer.php"); ?>