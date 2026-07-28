<?php
include("./include/header.php");
// Dynamic Breadcrumb Setup
$pageTitle = "Product Details";
include 'include/breadcrumb.php';
?>

<section class="product-details-section py-5 bg-white">
    <div class="container py-lg-4">

        <!-- =======================
             Top Section: Product Info
        ======================== -->
        <div class="row gx-lg-5 mb-5">

            <!-- Left: Product Gallery -->
            <div class="col-lg-5 mb-4 mb-lg-0 animate-fade-up">
                <div class="product-gallery">
                    <!-- Main Image -->
                    <div class="main-image-box bg-light rounded-4 mb-3 overflow-hidden position-relative">
                        <span class="product-badge bg-theme-primary text-white">In Stock</span>
                        <img src="assets/images/product/p-1.png" alt="Fresh Russet Potatoes" class="img-fluid w-100 object-fit-cover" id="mainProductImage">
                    </div>
                </div>
            </div>

            <!-- Right: Product Details -->
            <div class="col-lg-7 animate-fade-up delay-1">
                <div class="product-details-content">
                    <div class="d-flex align-items-center mb-2">
                        <div class="product-rating text-warning small me-2">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                        </div>
                        <span class="text-muted small">(15 Customer Reviews)</span>
                    </div>

                    <h2 class="theme-title mb-3">Fresh Russet Potatoes</h2>

                    <div class="price-box mb-4">
                        <span class="fs-3 fw-bold text-theme-primary">$18.00</span>
                        <span class="text-muted text-decoration-line-through ms-2">$25.00</span>
                        <span class="fs-6 text-muted fw-normal ms-1">/ 5kg Box</span>
                    </div>

                    <p class="text-muted mb-4 lead fs-6">Premium quality organic Russet potatoes, harvested straight from our farms. Known for their earthy flavor and high starch content, these are perfect for baking, mashing, and frying. Hand-sorted to ensure zero defects.</p>

                    <!-- Meta Data -->
                    <ul class="list-unstyled product-meta text-muted small mb-4 pb-4 border-bottom">
                        <li class="mb-2"><strong class="text-dark">SKU:</strong> RD-POT-001</li>
                        <li class="mb-2"><strong class="text-dark">Category:</strong> <a href="#" class="text-decoration-none theme-link">Fresh Potatoes</a>, <a href="#" class="text-decoration-none theme-link">Organic</a></li>
                        <li><strong class="text-dark">Tags:</strong> <a href="#" class="text-decoration-none theme-link">Russet</a>, <a href="#" class="text-decoration-none theme-link">Baking</a>, <a href="#" class="text-decoration-none theme-link">Export</a></li>
                    </ul>

                    <!-- Action Buttons -->
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <!-- Custom Quantity Input -->
                        <div class="quantity-selector d-flex align-items-center rounded-pill bg-light">
                            <button type="button" class="qty-btn minus-btn"><i class="bi bi-dash"></i></button>
                            <input type="number" class="qty-input bg-transparent border-0 text-center fw-bold" value="1" min="1" max="100">
                            <button type="button" class="qty-btn plus-btn"><i class="bi bi-plus"></i></button>
                        </div>

                        <button class="btn btn-theme-primary rounded-pill px-4 py-2 d-flex align-items-center gap-2">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </button>

                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 d-flex align-items-center gap-2">
                            <i class="bi bi-envelope"></i> Request Quote
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- =======================
             Middle Section: Tabs
        ======================== -->
        <div class="row mt-5 animate-fade-up delay-2">
            <div class="col-12">
                <div class="custom-tabs-wrapper">
                    <ul class="nav nav-tabs custom-nav-tabs border-bottom mb-4" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-bold px-0 me-4" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc" type="button" role="tab">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold px-0 me-4" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">Additional Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold px-0" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab">Reviews (3)</button>
                        </li>
                    </ul>

                    <div class="tab-content text-muted" id="productTabsContent">
                        <!-- Description Tab -->
                        <div class="tab-pane fade show active" id="desc" role="tabpanel">
                            <p>At Rudra International, our Russet potatoes are carefully cultivated in nutrient-rich soil without the use of harmful pesticides. After harvesting, they undergo a rigorous sorting process. Only the potatoes with the perfect shape, size, and skin texture make it to our export and premium retail batches.</p>
                            <p>These potatoes have a dry, mealy texture which makes them incredibly light and fluffy when baked or mashed. They also crisp up beautifully when fried, making them the ultimate choice for restaurants and home cooks alike.</p>
                        </div>

                        <!-- Additional Info Tab -->
                        <div class="tab-pane fade" id="info" role="tabpanel">
                            <table class="table table-bordered custom-table mt-3">
                                <tbody>
                                    <tr>
                                        <th class="bg-light w-25">Weight</th>
                                        <td>5kg, 10kg, 25kg bags available</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">Packaging</th>
                                        <td>Jute Bags, Mesh Nets, Corrugated Boxes</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">Shelf Life</th>
                                        <td>3-4 weeks (in cool, dark conditions)</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">Origin</th>
                                        <td>India (Certified Organic Farms)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Reviews Tab -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="review-list mb-4">
                                <!-- Review Item -->
                                <div class="d-flex mb-4 border-bottom pb-3">
                                    <div class="me-3">
                                        <div class="avatar-circle bg-theme-primary text-white d-flex align-items-center justify-content-center fw-bold fs-5 rounded-circle" style="width: 50px; height: 50px;">JD</div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-1">
                                            <h6 class="mb-0 me-2 text-dark">John Doe</h6>
                                            <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        </div>
                                        <span class="small text-muted d-block mb-2">August 12, 2023</span>
                                        <p class="mb-0">Excellent quality! The potatoes arrived in perfect condition, no sprouts or green spots. Highly recommended for bulk buyers.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Add Review Form -->
                            <div class="bg-light p-4 rounded-4 mt-4">
                                <h5 class="fw-bold mb-3">Add a Review</h5>
                                <p class="small text-muted mb-3">Your email address will not be published.</p>
                                <form>
                                    <div class="mb-3 d-flex align-items-center">
                                        <label class="me-3 mb-0">Your Rating:</label>
                                        <div class="text-warning cursor-pointer"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div>
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control shadow-none rounded-3" rows="3" placeholder="Your review..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-theme-primary rounded-pill px-4">Submit Review</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- =======================
     Bottom Section: Related Products
======================== -->
<section class="related-products py-5 bg-theme-soft">
    <div class="container py-lg-4">
        <h3 class="theme-title text-center mb-5 animate-fade-up">Related Products</h3>

        <div class="row g-4">
            <!-- Related Product 1 -->
            <div class="col-md-6 col-lg-3 animate-fade-up delay-1">
                <div class="product-card bg-white rounded-4 shadow-sm overflow-hidden h-100">
                    <div class="product-img-box position-relative">
                        <img src="assets/images/product/p-3.png" alt="Red Potato" class="img-fluid w-100 object-fit-cover">
                        <div class="product-actions">
                            <a href="#" class="action-btn" data-bs-toggle="tooltip" title="Quick View"><i class="bi bi-eye"></i></a>
                            <a href="#" class="action-btn cart-btn" data-bs-toggle="tooltip" title="Add to Cart"><i class="bi bi-cart-plus"></i></a>
                        </div>
                    </div>
                    <div class="product-info p-3 text-center">
                        <h6 class="mb-1"><a href="#" class="text-dark text-decoration-none product-title">Premium Red Potatoes</a></h6>
                        <span class="fw-bold text-theme-primary">$22.00</span>
                    </div>
                </div>
            </div>
            <!-- Add 3 more similar columns here for a full 4-column row -->
        </div>
    </div>
</section>

<!-- Simple Script for Image Gallery & Quantity -->
<script>
    // Gallery Image Changer
    function changeImage(imageSrc, thumbElement) {
        document.getElementById('mainProductImage').src = imageSrc;
        // Remove active class from all
        let thumbs = document.querySelectorAll('.thumbnail-box');
        thumbs.forEach(thumb => thumb.classList.remove('active-thumb'));
        // Add active class to clicked
        thumbElement.classList.add('active-thumb');
    }

    // Quantity Selector logic (Requires clicking +/-)
    document.addEventListener("DOMContentLoaded", function() {
        const minusBtn = document.querySelector('.minus-btn');
        const plusBtn = document.querySelector('.plus-btn');
        const qtyInput = document.querySelector('.qty-input');

        minusBtn.addEventListener('click', () => {
            if (qtyInput.value > 1) qtyInput.value--;
        });
        plusBtn.addEventListener('click', () => {
            qtyInput.value++;
        });
    });
</script>


<?php include("./include/footer.php"); ?>