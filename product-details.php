<?php
include("./admin/db-conn.php"); // Database connection
include("./include/header.php");

// URL se Product ID (pro_id) get karna
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch Specific Product Data with Category Name using LEFT JOIN
$sql = "SELECT p.*, c.categories AS category_name 
        FROM products p 
        LEFT JOIN categories c ON p.pro_cate = c.cate_id 
        WHERE p.pro_id = $product_id AND p.status = 1 LIMIT 1";
        
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $product = $result->fetch_assoc();
    
    // Assigning variables securely
    $pro_name = htmlspecialchars($product['pro_name']);
    $mrp = htmlspecialchars($product['mrp']);
    $selling_p = htmlspecialchars($product['selling_price']);
    $sku = !empty($product['sku']) ? htmlspecialchars($product['sku']) : "N/A";
    $category_name = !empty($product['category_name']) ? htmlspecialchars($product['category_name']) : "General";
    
    // Description formatting
    $short_desc = !empty($product['short_desc']) ? html_entity_decode($product['short_desc']) : "";
    $long_desc = !empty($product['description']) ? html_entity_decode($product['description']) : "No description available.";
    
    // Image Path Logic
    $img_path = !empty($product['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($product['pro_img']) : "assets/images/product/p-1.png";
    
    $pageTitle = $pro_name; // Set dynamic breadcrumb title
} else {
    // Agar product URL galat ho ya exist na kare
    echo "<script>window.location.href='products.php';</script>";
    exit;
}

// Dynamic Breadcrumb Setup
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
                    <div class="main-image-box bg-light rounded-4 mb-3 overflow-hidden position-relative" style="height: 450px;">
                        <?php if(isset($product['new_arrival']) && $product['new_arrival'] == 1): ?>
                            <span class="product-badge bg-theme-primary text-white position-absolute m-3 z-3 px-3 py-1 rounded-pill">New Arrival</span>
                        <?php endif; ?>
                        
                        <img src="<?= $img_path ?>" alt="<?= $pro_name ?>" class="img-fluid w-100 h-100 object-fit-cover" id="mainProductImage">
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

                    <h2 class="theme-title mb-3"><?= $pro_name ?></h2>

                    <div class="price-box mb-4">
                        <span class="fs-3 fw-bold text-theme-primary">₹<?= $selling_p ?></span>
                        <?php if(!empty($mrp) && $mrp > $selling_p): ?>
                            <span class="text-muted text-decoration-line-through ms-2">₹<?= $mrp ?></span>
                        <?php endif; ?>
                        <!-- If bulk qty is defined in DB -->
                        <?php if(!empty($product['qty'])): ?>
                            <span class="fs-6 text-muted fw-normal ms-1">/ <?= htmlspecialchars($product['qty']) ?></span>
                        <?php endif; ?>
                    </div>

                    <!-- Short Description -->
                    <div class="text-muted mb-4 lead fs-6">
                        <?= $short_desc ?>
                    </div>

                    <!-- Meta Data -->
                    <ul class="list-unstyled product-meta text-muted small mb-4 pb-4 border-bottom">
                        <li class="mb-2"><strong class="text-dark">SKU:</strong> <?= $sku ?></li>
                        <li class="mb-2"><strong class="text-dark">Category:</strong> <a href="#" class="text-decoration-none theme-link"><?= $category_name ?></a></li>
                    </ul>

                    <!-- Action Buttons -->
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <!-- Custom Quantity Input -->
                        <div class="quantity-selector d-flex align-items-center rounded-pill bg-light border p-1">
                            <button type="button" class="qty-btn minus-btn bg-transparent border-0 px-2"><i class="bi bi-dash"></i></button>
                            <input type="number" class="qty-input bg-transparent border-0 text-center fw-bold w-50" value="1" min="1" max="100">
                            <button type="button" class="qty-btn plus-btn bg-transparent border-0 px-2"><i class="bi bi-plus"></i></button>
                        </div>

                        <!-- Inquiry Button (Dynamically passes product name) -->
                        <a href="contact.php?product=<?= urlencode($pro_name) ?>" class="btn btn-theme-primary rounded-pill px-4 py-2 d-flex align-items-center gap-2">
                            <i class="bi bi-envelope"></i> Request Quote
                        </a>
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
                    </ul>

                    <div class="tab-content text-muted" id="productTabsContent">
                        <!-- Description Tab -->
                        <div class="tab-pane fade show active" id="desc" role="tabpanel">
                            <!-- Dynamic Long Description Rendered Here -->
                            <div class="blog-rich-text">
                                <?= $long_desc ?>
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
            <?php
            // Fetch 4 related products from the same category or random
            $sql_related = "SELECT * FROM products WHERE status = 1 AND pro_id != $product_id ORDER BY id DESC LIMIT 4";
            $result_related = $conn->query($sql_related);
            
            if ($result_related && $result_related->num_rows > 0) {
                $delay = 1;
                while ($rel_row = $result_related->fetch_assoc()) {
                    $rel_id = htmlspecialchars($rel_row['pro_id']);
                    $rel_name = htmlspecialchars($rel_row['pro_name']);
                    $rel_price = htmlspecialchars($rel_row['selling_price']);
                    $rel_img = !empty($rel_row['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($rel_row['pro_img']) : "assets/images/product/p-3.png";
            ?>
            <!-- Dynamic Related Product -->
            <div class="col-md-6 col-lg-3 animate-fade-up delay-<?= $delay ?>">
                <div class="product-card bg-white rounded-4 shadow-sm overflow-hidden h-100 d-flex flex-column">
                    <div class="product-img-box custom-img-wrapper position-relative">
                        <img src="<?= $rel_img ?>" alt="<?= $rel_name ?>" class="img-fluid w-100 h-100 object-fit-cover">
                        
                        <!-- Updated B2B Hover Actions -->
                        <div class="product-actions d-flex position-absolute w-100 justify-content-center">
                            <a href="product-details.php?id=<?= $rel_id ?>" class="action-btn" data-bs-toggle="tooltip" title="View Details">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="contact.php?product=<?= urlencode($rel_name) ?>" class="action-btn quote-btn" data-bs-toggle="tooltip" title="Request Quote">
                                <i class="bi bi-envelope-paper"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-info p-3 text-center mt-auto">
                        <h6 class="mb-1"><a href="product-details.php?id=<?= $rel_id ?>" class="text-dark text-decoration-none product-title"><?= $rel_name ?></a></h6>
                        <span class="fw-bold text-theme-primary">₹<?= $rel_price ?></span>
                    </div>
                </div>
            </div>
            <?php 
                    $delay++;
                }
            } else {
                echo "<div class='col-12 text-center text-muted'>No related products found.</div>";
            }
            ?>
        </div>
    </div>
</section>

<!-- Simple Script for Quantity -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tooltip Initialization
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        // Quantity Logic
        const minusBtn = document.querySelector('.minus-btn');
        const plusBtn = document.querySelector('.plus-btn');
        const qtyInput = document.querySelector('.qty-input');

        if(minusBtn && plusBtn && qtyInput) {
            minusBtn.addEventListener('click', () => {
                if (qtyInput.value > 1) qtyInput.value--;
            });
            plusBtn.addEventListener('click', () => {
                qtyInput.value++;
            });
        }
    });
</script>

<?php include("./include/footer.php"); ?>