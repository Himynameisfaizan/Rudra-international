
<?php 

include ("./include/header.php"); 

// Dynamic Breadcrumb Setup
$pageTitle = "Our Products"; 
include 'include/breadcrumb.php'; 
?>

<section class="products-section py-5 bg-theme-soft">
    <div class="container py-lg-4">
        <div class="row">
            
            <!-- =======================
                 Left Sidebar: Filters
            ======================== -->
            <div class="col-lg-3 mb-5 mb-lg-0 animate-fade-up">
                <div class="shop-sidebar bg-white p-4 rounded-4 shadow-sm">
                    
                    <!-- Categories -->
                    <div class="filter-widget mb-4 border-bottom pb-4">
                        <h5 class="fw-bold mb-3">Categories</h5>
                        <ul class="list-unstyled mb-0 custom-check-list">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="cat1" checked>
                                    <label class="form-check-label text-muted" for="cat1">Fresh Potatoes (15)</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="cat2">
                                    <label class="form-check-label text-muted" for="cat2">Organic Selection (08)</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="cat3">
                                    <label class="form-check-label text-muted" for="cat3">Seed Potatoes (12)</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="cat4">
                                    <label class="form-check-label text-muted" for="cat4">Bulk Export (20)</label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Price Filter -->
                    <div class="filter-widget">
                        <h5 class="fw-bold mb-3">Filter by Price</h5>
                        <input type="range" class="form-range custom-range" min="0" max="100" id="priceRange">
                        <div class="d-flex justify-content-between mt-2 text-muted small">
                            <span>$0</span>
                            <span>$100+</span>
                        </div>
                        <button class="btn btn-outline-theme w-100 rounded-pill mt-4">Apply Filter</button>
                    </div>

                </div>
            </div>

            <!-- =======================
                 Right Side: Product Grid
            ======================== -->
            <div class="col-lg-9">
                
                <!-- Grid Top Bar -->
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 bg-white p-3 rounded-4 shadow-sm animate-fade-up delay-1">
                    <p class="mb-0 text-muted small">Showing 1–6 of 24 results</p>
                    <div class="d-flex align-items-center">
                        <label class="me-2 text-dark fw-bold small mb-0">Sort By:</label>
                        <select class="form-select form-select-sm shadow-none custom-select border-0 bg-light rounded-pill px-3">
                            <option selected>Latest Products</option>
                            <option value="1">Price: Low to High</option>
                            <option value="2">Price: High to Low</option>
                            <option value="3">Top Rated</option>
                        </select>
                    </div>
                </div>

                <!-- The Grid -->
                <div class="row g-4">
                    
                    <!-- Product 1 -->
                    <div class="col-md-6 col-xl-4 animate-fade-up delay-1">
                        <div class="product-card bg-white rounded-4 shadow-sm overflow-hidden h-100">
                            <div class="product-img-box position-relative">
                                <span class="product-badge bg-success text-white">Organic</span>
                                <img src="assets/images/product/p-1.png" alt="Russet Potato" class="img-fluid w-100 object-fit-cover">
                                <!-- Hover Actions -->
                                <div class="product-actions">
                                    <a href="#" class="action-btn" data-bs-toggle="tooltip" title="Quick View"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="action-btn cart-btn" data-bs-toggle="tooltip" title="Add to Cart"><i class="bi bi-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-info p-4 text-center">
                                <div class="product-rating mb-2 text-warning small">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                </div>
                                <h5 class="mb-2"><a href="#" class="text-dark text-decoration-none product-title">Fresh Russet Potatoes</a></h5>
                                <div class="product-price">
                                    <span class="text-muted text-decoration-line-through me-2 small">$25.00</span>
                                    <span class="fs-5 fw-bold text-theme-primary">$18.00 <small class="text-muted fs-6 fw-normal">/ 5kg</small></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="col-md-6 col-xl-4 animate-fade-up delay-2">
                        <div class="product-card bg-white rounded-4 shadow-sm overflow-hidden h-100">
                            <div class="product-img-box position-relative">
                                <img src="assets/images/product/p-2.png" alt="Red Potato" class="img-fluid w-100 object-fit-cover">
                                <div class="product-actions">
                                    <a href="#" class="action-btn" data-bs-toggle="tooltip" title="Quick View"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="action-btn cart-btn" data-bs-toggle="tooltip" title="Add to Cart"><i class="bi bi-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-info p-4 text-center">
                                <div class="product-rating mb-2 text-warning small">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <h5 class="mb-2"><a href="#" class="text-dark text-decoration-none product-title">Premium Red Potatoes</a></h5>
                                <div class="product-price">
                                    <span class="fs-5 fw-bold text-theme-primary">$22.00 <small class="text-muted fs-6 fw-normal">/ 5kg</small></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="col-md-6 col-xl-4 animate-fade-up delay-3">
                        <div class="product-card bg-white rounded-4 shadow-sm overflow-hidden h-100">
                            <div class="product-img-box position-relative">
                                <span class="product-badge bg-danger text-white">-15%</span>
                                <img src="assets/images/product/p-3.png" alt="Baby Potato" class="img-fluid w-100 object-fit-cover">
                                <div class="product-actions">
                                    <a href="#" class="action-btn" data-bs-toggle="tooltip" title="Quick View"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="action-btn cart-btn" data-bs-toggle="tooltip" title="Add to Cart"><i class="bi bi-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-info p-4 text-center">
                                <div class="product-rating mb-2 text-warning small">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
                                </div>
                                <h5 class="mb-2"><a href="#" class="text-dark text-decoration-none product-title">Organic Baby Yellows</a></h5>
                                <div class="product-price">
                                    <span class="fs-5 fw-bold text-theme-primary">$15.00 <small class="text-muted fs-6 fw-normal">/ 2kg</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Copy Product 1, 2, or 3 blocks here for more items (Product 4, 5, 6) to fill the grid -->

                </div>

                <!-- =======================
                     Pagination System
                ======================== -->
                <nav aria-label="Product pagination" class="mt-5 pt-3 border-top animate-fade-up delay-3">
                    <ul class="pagination justify-content-center custom-pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</section>

<!-- Include Bootstrap Tooltip Initialization Script (Put this before closing </body>) -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });
</script>


<?php include ("./include/footer.php"); ?>