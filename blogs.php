<?php 
$pageTitle = "Our Services"; 
include ("./include/header.php"); 
include 'include/breadcrumb.php'; 
?>

<!-- =======================
     Services Grid Section
======================== -->
<section class="blog-section py-5 bg-theme-soft">
    <div class="container py-lg-4">
        <div class="row">
            
            <!-- =======================
                 Left Side: Main Blog List
            ======================== -->
            <div class="col-lg-8">
                
                <!-- Blog Post 1 -->
                <div class="blog-list-card bg-white rounded-4 shadow-sm mb-4 animate-fade-up">
                    <div class="row g-0 align-items-center">
                        <!-- Blog Image -->
                        <div class="col-md-5">
                            <div class="blog-img-wrap rounded-start-4 overflow-hidden position-relative h-100">
                                <img src="assets/images/product/p-1.png" alt="Organic Potatoes" class="img-fluid w-100 object-fit-cover">
                                <!-- Floating Date Badge -->
                                <div class="blog-date-badge text-center">
                                    <span class="day">15</span>
                                    <span class="month">AUG</span>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Content -->
                        <div class="col-md-7">
                            <div class="blog-content p-4 p-lg-5">
                                <!-- Meta Info (Admin, Category) -->
                                <ul class="blog-meta list-unstyled d-flex flex-wrap mb-2 small text-muted">
                                    <li class="me-3"><i class="bi bi-person text-theme-primary me-1"></i> By Admin</li>
                                    <li><i class="bi bi-tag text-theme-primary me-1"></i> Organic Farming</li>
                                </ul>
                                
                                <h3 class="blog-title h4 mb-3">
                                    <a href="blog-details.php" class="text-dark text-decoration-none">5 Benefits of Choosing Organic Potatoes</a>
                                </h3>
                                
                                <p class="text-muted mb-4">Discover how organically grown potatoes offer better nutritional value and why they are the right choice for your family's daily diet and long-term health...</p>
                                
                                <a href="blog-details.php" class="read-more-link fw-bold">
                                    Continue Reading <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="blog-list-card bg-white rounded-4 shadow-sm mb-4 animate-fade-up delay-1">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <div class="blog-img-wrap rounded-start-4 overflow-hidden position-relative h-100">
                                <img src="assets/images/product/p-1.png" alt="Export Quality" class="img-fluid w-100 object-fit-cover">
                                <div class="blog-date-badge text-center">
                                    <span class="day">02</span>
                                    <span class="month">SEP</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="blog-content p-4 p-lg-5">
                                <ul class="blog-meta list-unstyled d-flex flex-wrap mb-2 small text-muted">
                                    <li class="me-3"><i class="bi bi-person text-theme-primary me-1"></i> By Admin</li>
                                    <li><i class="bi bi-tag text-theme-primary me-1"></i> Export & Trade</li>
                                </ul>
                                <h3 class="blog-title h4 mb-3">
                                    <a href="blog-details.php" class="text-dark text-decoration-none">How We Ensure Export Quality Standards</a>
                                </h3>
                                <p class="text-muted mb-4">A deep dive into our quality control process, from manual sorting to automated grading, ensuring only the best produce reaches the global market...</p>
                                <a href="blog-details.php" class="read-more-link fw-bold">
                                    Continue Reading <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation" class="mt-5 animate-fade-up delay-2">
                    <ul class="pagination justify-content-center custom-pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

            </div>

            <!-- =======================
                 Right Side: Sidebar
            ======================== -->
            <div class="col-lg-4 mt-5 mt-lg-0 animate-fade-up delay-2">
                <div class="blog-sidebar">
                    
                    <!-- Search Widget -->
                    <div class="widget bg-white p-4 rounded-4 shadow-sm mb-4">
                        <h4 class="widget-title h5 mb-3 fw-bold">Search</h4>
                        <div class="input-group">
                            <input type="text" class="form-control rounded-start-pill shadow-none" placeholder="Search blog...">
                            <button class="btn btn-theme-primary rounded-end-pill px-3" type="button"><i class="bi bi-search"></i></button>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="widget bg-white p-4 rounded-4 shadow-sm mb-4">
                        <h4 class="widget-title h5 mb-3 fw-bold">Categories</h4>
                        <ul class="list-unstyled mb-0 category-list">
                            <li><a href="#">Organic Farming <span>(12)</span></a></li>
                            <li><a href="#">Potato Varieties <span>(08)</span></a></li>
                            <li><a href="#">Export & Trade <span>(15)</span></a></li>
                            <li><a href="#">Healthy Recipes <span>(05)</span></a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>



<?php include ("./include/footer.php"); ?>