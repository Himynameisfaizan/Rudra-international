<?php 
include ("./admin/db-conn.php"); // Database Connection
include ("./include/header.php"); 

// Dynamic Breadcrumb Setup
$pageTitle = "Our Products"; 
include 'include/breadcrumb.php'; 

// Fetch Active Categories
$sql_cats = "SELECT * FROM categories WHERE status = 1";
$result_cats = $conn->query($sql_cats);

// Fetch Active Products
$sql_prods = "SELECT * FROM products WHERE status = 1 ORDER BY id DESC";
$result_prods = $conn->query($sql_prods);
?>

<section class="products-section py-5 bg-theme-soft">
    <div class="container py-lg-4">
        <div class="row">
            
            <!-- =======================
                 Left Sidebar: Filters
            ======================== -->
            <div class="col-lg-3 mb-5 mb-lg-0 animate-fade-up">
                <div class="shop-sidebar bg-white p-4 rounded-4 shadow-sm">
                    
                    <!-- Dynamic Categories -->
                    <div class="filter-widget mb-4 border-bottom pb-4">
                        <h5 class="fw-bold mb-3">Categories</h5>
                        <ul class="list-unstyled mb-0 custom-check-list">
                            <?php 
                            if ($result_cats && $result_cats->num_rows > 0) {
                                $cat_counter = 1;
                                while ($cat_row = $result_cats->fetch_assoc()) {
                                    $cat_name = htmlspecialchars($cat_row['categories']); // Category Name
                                    $cat_id = htmlspecialchars($cat_row['cate_id']);
                            ?>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="cat<?= $cat_counter ?>" value="<?= $cat_id ?>">
                                    <label class="form-check-label text-muted" for="cat<?= $cat_counter ?>"><?= $cat_name ?></label>
                                </div>
                            </li>
                            <?php 
                                    $cat_counter++;
                                }
                            } else {
                                echo "<li><span class='text-muted'>No categories found.</span></li>";
                            }
                            ?>
                        </ul>
                    </div>

                    <!-- Price Filter -->
                    <div class="filter-widget">
                        <h5 class="fw-bold mb-3">Filter by Price</h5>
                        <input type="range" class="form-range custom-range" min="0" max="2000" id="priceRange">
                        <div class="d-flex justify-content-between mt-2 text-muted small">
                            <span>₹0</span>
                            <span>₹2000+</span>
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
                    <p class="mb-0 text-muted small">
                        Showing <?= $result_prods->num_rows ?> results
                    </p>
                    <div class="d-flex align-items-center">
                        <label class="me-2 text-dark fw-bold small mb-0">Sort By:</label>
                        <select class="form-select form-select-sm shadow-none custom-select border-0 bg-light rounded-pill px-3">
                            <option selected>Latest Products</option>
                            <option value="1">Price: Low to High</option>
                            <option value="2">Price: High to Low</option>
                        </select>
                    </div>
                </div>

                <!-- The Grid -->
                <div class="row g-4">
                    
                    <?php 
                    if ($result_prods && $result_prods->num_rows > 0) {
                        $delay = 1;
                        while ($row = $result_prods->fetch_assoc()) {
                            $pro_id = htmlspecialchars($row['pro_id']); //[cite: 1]
                            $pro_name = htmlspecialchars($row['pro_name']); //[cite: 1]
                            $mrp = htmlspecialchars($row['mrp']); //[cite: 1]
                            $selling_p = htmlspecialchars($row['selling_price']); //[cite: 1]
                            
                            // Image fetching with fallback logic
                            $img_path = !empty($row['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['pro_img']) : "assets/images/product/p-1.png";
                    ?>
                    
                    <!-- Dynamic Product Card -->
                    <div class="col-md-6 col-xl-4 animate-fade-up delay-<?= $delay > 3 ? 1 : $delay ?>">
                        <div class="product-card bg-white rounded-4 shadow-sm overflow-hidden h-100 d-flex flex-column">
                            
                            <div class="product-img-box custom-img-wrapper position-relative">
                                <!-- Badge condition - Optional: check if new arrival is 1[cite: 1] -->
                                <?php if(isset($row['new_arrival']) && $row['new_arrival'] == 1): ?>
                                    <span class="product-badge bg-theme-primary text-white">New</span>
                                <?php endif; ?>

                                <a href="product-details.php?id=<?= $pro_id ?>" class="d-block w-100 h-100">
                                    <img src="<?= $img_path ?>" alt="<?= $pro_name ?>" class="img-fluid w-100 h-100 object-fit-cover">
                                </a>
                                
                                <!-- B2B Hover Actions (View Details & Quote) -->
                                <div class="product-actions d-flex position-absolute w-100 justify-content-center">
                                    <a href="product-details.php?id=<?= $pro_id ?>" class="action-btn" data-bs-toggle="tooltip" title="View Details">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="contact.php?product=<?= urlencode($pro_name) ?>" class="action-btn quote-btn" data-bs-toggle="tooltip" title="Request Quote">
                                        <i class="bi bi-envelope-paper"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="product-info p-4 text-center mt-auto">
                                <div class="product-rating mb-2 text-warning small">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                </div>
                                <h5 class="mb-2">
                                    <a href="product-details.php?id=<?= $pro_id ?>" class="text-dark text-decoration-none product-title fs-5 fw-bold"><?= $pro_name ?></a>
                                </h5>
                                <!-- <div class="product-price">
                                    <span class="fs-5 fw-bold text-theme-primary">₹<?= $selling_p ?></span>
                                    
                                    <?php if(!empty($mrp) && $mrp > $selling_p): ?>
                                        <span class="text-muted text-decoration-line-through ms-2 small">₹<?= $mrp ?></span>
                                    <?php endif; ?>
                                </div> -->
                            </div>
                            
                        </div>
                    </div>
                    
                    <?php 
                            $delay++;
                        }
                    } else {
                        echo "<div class='col-12 text-center py-5'><h5>No products currently available.</h5></div>";
                    }
                    ?>

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

<!-- Include Bootstrap Tooltip Initialization Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });
</script>

<?php include ("./include/footer.php"); ?>