<?php

include("./admin/db-conn.php");
include("./include/header.php");

$sqlProduct = "SELECT * from products where status = 1 limit 4";
$sqlFeature = "SELECT * from products where status = 1 order by id desc limit 8";
$sqlBlog = "SELECT * FROM blogs WHERE status = 'published' LIMIT 3";
$resultProduct = $conn->query($sqlProduct);
$resultFeature = $conn->query($sqlFeature);
$resultBlog = $conn->query($sqlBlog);
?>

<style>
    /* =========================================
   Index Page Product Grid Fixes
   ========================================= */

    .custom-img-wrapper {
        height: 250px;
        width: 100%;
        overflow: hidden;
        background-color: #f9f9f9;
    }

    /* Image zoom effect on hover */
    .custom-img-wrapper img {
        transition: transform 0.5s ease;
    }

    .single-product:hover .custom-img-wrapper img {
        transform: scale(1.08);
    }

    /* Product Card border and shadow hover */
    .single-product {
        border: 1px solid transparent;
        transition: all 0.3s ease;
    }

    .single-product:hover {
        border-color: #eee;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08) !important;
        transform: translateY(-5px);
    }

    /* =========================================
   Updated Hover Action Buttons
   ========================================= */
    .add-action {
        bottom: -50px;
        /* Hidden below the image initially */
        left: 0;
        gap: 12px;
        opacity: 0;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        z-index: 3;
    }

    .single-product:hover .add-action {
        bottom: 20px;
        /* Slides up smoothly */
        opacity: 1;
    }

    .action-btn {
        width: 45px;
        height: 45px;
        background-color: #fff;
        color: var(--theme-dark, #2c2c2c);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 1.2rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
    }

    .action-btn:hover {
        background-color: var(--theme-primary, #75a743);
        /* Tumhara brand green */
        color: #fff;
        transform: translateY(-3px);
    }

    /* Request Quote button ka alag colour takki wo highlight ho */
    .quote-btn {
        background-color: var(--theme-dark, #2c2c2c);
        color: #fff;
    }

    .quote-btn:hover {
        background-color: var(--theme-primary, #75a743);
    }

    /* =========================================
   Index Page - Blog Section Fixes
  ========================================= */

    /* Blog Card Container Hover */
    .transition-hover {
        transition: all 0.3s ease-in-out;
        border: 1px solid transparent;
    }

    .transition-hover:hover {
        border-color: #eee;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08) !important;
        transform: translateY(-5px);
    }

    /* Fixed Height for Blog Images */
    .custom-blog-img-wrapper {
        height: 240px;
        /* Same logic: fixes the height of all images */
        width: 100%;
        overflow: hidden;
        background-color: #f9f9f9;
    }

    /* Smooth Image Zoom on Hover */
    .transition-zoom {
        transition: transform 0.5s ease;
    }

    .single-blog:hover .transition-zoom {
        transform: scale(1.08);
        /* Halaka sa zoom in */
    }

    /* Floating Date Badge Customization */
    .post-date {
        top: 15px;
        right: 15px;
        min-width: 55px;
        background-color: var(--theme-primary, #75a743);
        z-index: 2;
    }

    /* Text Hover Colors */
    .hover-primary {
        transition: color 0.3s ease;
    }

    .hover-primary:hover {
        color: var(--theme-primary, #75a743) !important;
    }

    /* =========================================
   Index Page - 3 Column Banner Fixes
   ========================================= */

    /* Fixed Height Wrapper for Banners */
    .custom-banner-wrapper {
    height: 180px; /* Reference image ke hisaab se horizontal banner height */
    width: 100%;
    position: relative;
    background-color: #f8f9fa;
    transition: all 0.3s ease-in-out;
    }

    /* Ensure images fill the box cleanly without distortion */
    .custom-banner-img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
    }

    /* Subtle Zoom & Lift Effect on Hover */
    .custom-banner-wrapper:hover {
    box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    }

    .custom-banner-wrapper:hover .custom-banner-img {
    transform: scale(1.05);
    }

    /* Responsive adjustment for Mobile screens */
    @media (max-width: 767px) {
    .custom-banner-wrapper {
        height: 200px;
        margin-bottom: 20px !important;
    }
    }
</style>

<div class="slider-area">
    <div class="obrien-slider arrow-style" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": true,
                "autoplay" : true,
                "fade" : true,
                "autoplaySpeed" : 7000,
                "pauseOnHover" : false,
                "pauseOnFocus" : false
                }' data-slick-responsive='[
                {"breakpoint":992, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "dots": true
                }}
                ]'>
        <div class="slide-item slide-3 bg-position slide-bg-1 animation-style-01">
            <div class="slider-content">
                <h4 class="slider-small-title">Organic Products</h4>
                <h2 class="slider-large-title">Life with Beauty</h2>
                <div class="slider-btn">
                    <a class="obrien-button black-btn" href="#">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="slide-item slide-4 bg-position slide-bg-1 animation-style-01">
            <div class="slider-content">
                <h4 class="slider-small-title">Cold process organic</h4>
                <h2 class="slider-large-title">Superior skin care</h2>
                <div class="slider-btn">
                    <a class="obrien-button black-btn" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area One End Here -->
<!-- Call To Action Area Start Here -->
<div class="call-to-action-area">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-custom">
                <div class="call-to-action-item mt-0 d-lg-flex d-md-block align-items-center">
                    <div class="call-to-action-icon">
                        <img src="assets/images/icons/icon-1.png" alt="Icon">
                    </div>
                    <div class="call-to-action-info">
                        <h3 class="action-title">Free Home Delivery</h3>
                        <p class="desc-content">Provide free home delivery for all product over $100</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-custom">
                <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                    <div class="call-to-action-icon">
                        <img src="assets/images/icons/icon-2.png" alt="Icon">
                    </div>
                    <div class="call-to-action-info">
                        <h3 class="action-title">Quality Products</h3>
                        <p class="desc-content">We ensure our product quality all times</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-custom">
                <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                    <div class="call-to-action-icon">
                        <img src="assets/images/icons/icon-3.png" alt="Icon">
                    </div>
                    <div class="call-to-action-info">
                        <h3 class="action-title">Online Support</h3>
                        <p class="desc-content">To satisfy our customer we try to give support online</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action Area End Here -->
<!-- Banner Area Start Here -->
<div class="banner-area">
    <div class="container container-default custom-area">
        <div class="row">
            <?php
            // Fetch top 3 active banners ordered by their display order
            $sql_banners = "SELECT * FROM banners WHERE status = 0 ORDER BY display_order ASC, id DESC LIMIT 3";
            $result_banners = $conn->query($sql_banners);

            if ($result_banners && $result_banners->num_rows > 0) {
                $count = 1;
                while ($banner = $result_banners->fetch_assoc()) {
                    
                    $banner_title = !empty($banner['title']) ? htmlspecialchars($banner['title'], ENT_QUOTES, 'UTF-8') : "Potato Banner";
                    $banner_link  = !empty($banner['link_url']) ? htmlspecialchars($banner['link_url'], ENT_QUOTES, 'UTF-8') : "#";
                    
                    // Image Path: Tumhare DB mein image "uploads/banners/..." se save hai.
                    // Isliye "admin/" lagaya hai taaki path sahi se ban jaye.
                    $banner_img   = !empty($banner['banner_path']) ? "admin/" . htmlspecialchars($banner['banner_path'], ENT_QUOTES, 'UTF-8') : "assets/images/banner/small-banner/potato-banner.png";
                    
                    // 3rd banner ke liye margin-bottom 0 karna (Design ke according)
                    $mb_class = ($count == 3) ? "mb-0" : "";
            ?>
            <!-- Dynamic Banner <?php echo $count; ?> -->
            <div class="col-md-4 col-sm-12 col-custom mb-4 mb-md-0">
                <div class="banner-image hover-style custom-banner-wrapper rounded-4 overflow-hidden shadow-sm <?php echo $mb_class; ?>">
                    <a class="d-block w-100 h-100" href="<?php echo $banner_link; ?>">
                        <img class="w-100 h-100 object-fit-cover custom-banner-img" src="<?php echo $banner_img; ?>" alt="<?php echo $banner_title; ?>">
                    </a>
                </div>
            </div>
            <?php
                    $count++;
                }
            } else {
                echo '<div class="col-12 text-center text-muted"><p>No banners available at the moment.</p></div>';
            }
            ?>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->
<!-- Product Area Start Here -->
<div class="product-area mt-text">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-5 m-auto text-center col-custom">
                <div class="section-content">
                    <h2 class="title-1 text-uppercase">Best Sale</h2>
                    <div class="desc-content">
                        <p>All best seller product are now available for you and your can buy this product from here any time any where so sop now</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 product-wrapper col-custom">
                <div class="product-slider" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "dots": false
                        }' data-slick-responsive='[
                        {"breakpoint": 1200, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 992, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint": 576, "settings": {
                        "slidesToShow": 1
                        }}
                        ]'>

                    <?php
                    if ($resultProduct && $resultProduct->num_rows > 0) {
                        while ($row = $resultProduct->fetch_assoc()) {
                            $pro_id = htmlspecialchars($row['pro_id']);
                            $pro_name = htmlspecialchars($row['pro_name']);
                            $mrp = htmlspecialchars($row['mrp']);
                            $selling_p = htmlspecialchars($row['selling_price']);
                            $img_path = !empty($row['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['pro_img']) : "assets/images/product/medium-size/default.png";
                    ?>
                            <!-- Yahan main grid layout ko same height rakhne ke liye h-100 add kiya hai -->
                            <div class="single-item mb-4">
                                <div class="single-product position-relative h-100 bg-white rounded-4 shadow-sm overflow-hidden d-flex flex-column">

                                    <!-- Fixed Height Image Wrapper -->
                                    <div class="product-image custom-img-wrapper position-relative">
                                        <a class="d-block w-100 h-100" href="product-details.php?id=<?= $pro_id ?>">
                                            <!-- object-fit-cover ensure karega ki image wrapper ko puri tarah fill kare bina stretch hue -->
                                            <img src="<?= $img_path ?>" alt="<?= $pro_name ?>" class="product-image-1 w-100 h-100 object-fit-cover">
                                        </a>

                                        <!-- Updated Smart Hover Actions -->
                                        <div class="add-action d-flex position-absolute w-100 justify-content-center">
                                            <a href="product-details.php?id=<?= $pro_id ?>" title="View Details" class="action-btn" data-bs-toggle="tooltip">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <!-- Contact page link with product name in URL dynamically -->
                                            <a href="contact.php?product=<?= urlencode($pro_name) ?>" title="Request Quote" class="action-btn quote-btn" data-bs-toggle="tooltip">
                                                <i class="bi bi-envelope-paper"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Product Content -->
                                    <div class="product-content p-4 text-center mt-auto">
                                        <div class="product-rating text-warning small mb-2">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </div>
                                        <div class="product-title mb-2">
                                            <!-- fs-5 aur fw-bold se text ko thoda bold kiya hai -->
                                            <h4 class="title-2 fs-5 fw-bold">
                                                <a href="product-details.php?id=<?= $pro_id ?>" class="text-dark text-decoration-none"><?php echo $pro_name ?></a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price fs-5 fw-bold text-theme-primary">₹<?= $selling_p ?></span>
                                            <!-- Condition lagai hai taki agar MRP nahi hai ya selling price se kam hai to cut price na dikhaye -->
                                            <?php if (!empty($mrp) && $mrp > $selling_p): ?>
                                                <span class="old-price text-muted ms-2"><del>₹<?php echo $mrp ?></del></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Newslatter Area Start Here -->
<div class="newsletter-area mt-no-text mb-text-p">
    <div class="container container-default h-100 custom-area">
        <div class="row h-100">
            <div class="col-lg-8 col-xl-5 offset-xl-6 offset-lg-3 col-custom">
                <div class="newsletter-content text-center d-flex flex-column align-items-center justify-content-center h-100">
                    <div class="section-content">
                        <h4 class="title-4 text-uppercase">Special <span>Offer</span> for subscription</h4>
                        <h2 class="title-3 text-uppercase">Get instant discount for membership</h2>
                        <p class="desc-content">Subscribe our newsletter and all latest news of our <br>latest product, promotion and offers</p>
                    </div>
                    <div class="newsletter-form-wrap ml-auto mr-auto">
                        <form id="mc-form" class="mc-form d-flex position-relative">
                            <input type="email" id="mc-email" class="form-control email-box" placeholder="email@example.com" name="EMAIL">
                            <button id="mc-submit" class="btn primary-btn obrien-button newsletter-btn position-absolute" type="submit">Subscribe</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newslatter Area End Here -->
<!-- Feature Area Start Here -->
<div class="feature-area mb-no-text">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-xl-6 col-lg-5 col-md-12 col-custom">
                <div class="feature-content-wrapper">
                    <h2 class="title">Important to eat potatoes</h2>
                    <p class="desc-content">Eating potatoes provides health benefits — people who eat more starchy vegetables and roots as part of an overall healthy diet are likely to have a reduced risk of some chronic diseases. Potatoes provide nutrients vital for energy and maintenance of your body.</p>
                    <p Potatoes are sources of many essential nutrients that are underconsumed, including potassium, dietary fiber, vitamin B6, and vitamin C.</p>
                    <p Most potatoes are naturally low in fat, sodium, and calories. None have cholesterol.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-12 col-custom">
                <div class="feature-image position-relative">
                    <img src="assets/images/product/p-1.png" alt="Obrien Feature">
                    <div class="popup-video position-absolute">
                        <a class="popup-vimeo" href="https://www.youtube.com/watch?v=_9VUPq3SxOc">
                            <i class="ion-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Area End Here -->
<!-- Banner Fullwidth Area Start Here -->
<div class="banner-fullwidth-area mb-text">
    <div class="container custom-area">
        <div class="row">
            <div class="col-md-5 col-lg-6 text-center col-custom">
                <div class="banner-thumb h-100 d-flex justify-content-center align-items-center">
                    <img src="assets/images/product/p-3.png" alt="Banner Thumb">
                </div>
            </div>
            <div class="col-md-7 col-lg-6 text-center justify-content-center col-custom">
                <div class="banner-flash-content d-flex flex-column align-items-center justify-content-center h-100">
                    <h2 class="deal-head text-uppercase">Flash Deals</h2>
                    <h3 class="deal-title text-uppercase">Hurry up and Get 25% Discount</h3>
                    <a href="#" class="obrien-button primary-btn">Shop Now</a>
                    <div class="countdown-wrapper d-flex justify-content-center" data-countdown="2022/12/24"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Fullwidth Area End Here -->

<!-- Product Area Start Here -->
<div class="product-area mb-text">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-5 m-auto text-center col-custom">
                <div class="section-content">
                    <h2 class="title-1 text-uppercase">Featured Products</h2>
                    <div class="desc-content">
                        <p>All best seller product are now available for you and your can buy this product from here any time any where so sop now</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-wrapper col-lg-12 col-custom">
                <div class="product-slider" data-slick-options='{
                    "slidesToShow": 4,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "arrows": false,
                    "dots": false
                    }' data-slick-responsive='[
                    {"breakpoint": 1200, "settings": {
                    "slidesToShow": 3
                    }},
                    {"breakpoint": 992, "settings": {
                    "slidesToShow": 2
                    }},
                    {"breakpoint": 576, "settings": {
                    "slidesToShow": 1
                    }}
                    ]'>
                    <?php
                    if ($resultFeature && $resultFeature->num_rows > 0) {
                        while ($row = $resultFeature->fetch_assoc()) {
                            $pro_id = htmlspecialchars($row['pro_id']);
                            $pro_name = htmlspecialchars($row['pro_name']);
                            $mrp = htmlspecialchars($row['mrp']);
                            $selling_p = htmlspecialchars($row['selling_price']);
                            $img_path = !empty($row['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['pro_img']) : "assets/images/product/medium-size/default.png";
                    ?>
                            <!-- Same uniform structure applied here -->
                            <div class="single-item mb-4">
                                <div class="single-product position-relative h-100 bg-white rounded-4 shadow-sm overflow-hidden d-flex flex-column mb-30">

                                    <!-- Fixed Height Image Wrapper -->
                                    <div class="product-image custom-img-wrapper position-relative">
                                        <a class="d-block w-100 h-100" href="product-details.php?id=<?= $pro_id ?>">
                                            <!-- Extra hardcoded image hata di gayi hai aur object-fit-cover lagaya hai -->
                                            <img src="<?php echo $img_path ?>" alt="<?= $pro_name ?>" class="product-image-1 w-100 h-100 object-fit-cover">
                                        </a>

                                        <!-- Updated B2B Hover Actions (No Cart/Wishlist) -->
                                        <div class="add-action d-flex position-absolute w-100 justify-content-center">
                                            <a href="product-details.php?id=<?= $pro_id ?>" title="View Details" class="action-btn" data-bs-toggle="tooltip">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="contact.php?product=<?= urlencode($pro_name) ?>" title="Request Quote" class="action-btn quote-btn" data-bs-toggle="tooltip">
                                                <i class="bi bi-envelope-paper"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Product Content -->
                                    <div class="product-content p-4 text-center mt-auto">
                                        <div class="product-rating text-warning small mb-2">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </div>
                                        <div class="product-title mb-2">
                                            <h4 class="title-2 fs-5 fw-bold">
                                                <a href="product-details.php?id=<?= $pro_id ?>" class="text-dark text-decoration-none"><?= $pro_name ?></a>
                                            </h4>
                                        </div>
                                        <!-- Fixed Hardcoded Prices -->
                                        <div class="price-box">
                                            <span class="regular-price fs-5 fw-bold text-theme-primary">₹<?= $selling_p ?></span>
                                            <!-- MRP condition: agar MRP zyada hai tabhi cut (del) price dikhega -->
                                            <?php if (!empty($mrp) && $mrp > $selling_p): ?>
                                                <span class="old-price text-muted ms-2"><del>₹<?php echo $mrp ?></del></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Latest Blog Area Start Here -->
<div class="latest-blog-area">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-5 m-auto text-center col-custom">
                <div class="section-content">
                    <h2 class="title-1 text-uppercase">Latest Blog</h2>
                    <div class="desc-content">
                        <p>If you want to know about the organic product then keep an eye on our blog.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-custom">
                <div class="obrien-slider" data-slick-options='{
                        "slidesToShow": 3,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "dots": false
                        }' data-slick-responsive='[
                        {"breakpoint": 1200, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint": 992, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint": 768, "settings": {
                        "slidesToShow": 1
                        }},
                        {"breakpoint": 576, "settings": {
                        "slidesToShow": 1
                        }}
                        ]'>
                    <?php
                    if ($resultBlog && $resultBlog->num_rows > 0) {
                        while ($row = $resultBlog->fetch_assoc()) {
                            $blog_id = $row['id'];
                            $title = htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8');
                            $author = !empty($row['author']) ? htmlspecialchars($row['author'], ENT_QUOTES, 'UTF-8') : "Admin";

                            $date_day = date('d', strtotime($row['created_at']));
                            $date_month = date('M', strtotime($row['created_at']));

                            $raw_content = html_entity_decode($row['content']);
                            $clean_text = strip_tags($raw_content);
                            $excerpt = mb_strlen($clean_text) > 100 ? mb_substr($clean_text, 0, 100) . "..." : $clean_text;

                            $safe_short_text = htmlspecialchars($excerpt, ENT_QUOTES, 'UTF-8');
                            $img_path = !empty($row['image']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['image']) : "https://placehold.co/800x600/eeeeee/999999?text=Blog+Image";
                    ?>
                            <div class="single-blog h-100 bg-white rounded-4 shadow-sm overflow-hidden d-flex flex-column mb-4 transition-hover">

                                <div class="single-blog-thumb custom-blog-img-wrapper position-relative">
                                    <a href="blog-details.php?id=<?= $blog_id ?>" class="d-block w-100 h-100">
                                        <img src="<?= $img_path ?>" alt="<?= $title ?>" class="w-100 h-100 object-fit-cover transition-zoom">
                                    </a>

                                    <div class="post-date text-center bg-theme-primary text-white rounded d-flex flex-column position-absolute shadow-sm p-2">
                                        <span class="fs-5 fw-bold lh-1"><?= $date_day ?></span>
                                        <span class="small text-uppercase fw-semibold"><?= $date_month ?></span>
                                    </div>
                                </div>

                                <div class="single-blog-content p-4 d-flex flex-column flex-grow-1">
                                    <div class="post-meta mb-2 small text-muted">
                                        <span class="author"><i class="bi bi-person text-theme-primary me-1"></i> <?= $author ?></span>
                                    </div>
                                    <h2 class="post-title fs-5 fw-bold mb-3">
                                        <a href="blog-details.php?id=<?= $blog_id ?>" class="text-dark text-decoration-none hover-primary"><?= $title ?></a>
                                    </h2>
                                    <p class="desc-content text-muted mb-0"><?= $safe_short_text ?></p>
                                </div>

                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest Blog Area End Here -->

<!-- Brand Logo Area Start Here -->
<div class="brand-logo-area mt-text mb-no-text">
    <div class="container custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">
                <div class="obrien-slider" data-slick-options='{
                        "slidesToShow": 5,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "dots": false
                        }' data-slick-responsive='[
                        {"breakpoint": 1200, "settings": {
                        "slidesToShow": 4
                        }},
                        {"breakpoint": 992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 576, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 481, "settings": {
                        "slidesToShow": 2
                        }}
                        ]'>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-1.png" alt="Brand Logo">
                        </a>
                    </div>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-2.png" alt="Brand Logo">
                        </a>
                    </div>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-3.png" alt="Brand Logo">
                        </a>
                    </div>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-4.png" alt="Brand Logo">
                        </a>
                    </div>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-5.png" alt="Brand Logo">
                        </a>
                    </div>
                    <div class="brand-logo-item">
                        <a href="#">
                            <img src="assets/images/brand-logo/brand-3.png" alt="Brand Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Logo Area End Here -->

<!-- Support Area Start Here -->
<div class="support-area">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">
                <div class="support-wrapper d-flex">
                    <div class="support-content">
                        <h1 class="title">Need Help ?</h1>
                        <p class="desc-content">Call our support 24/7 at +91 9687613713</p>
                    </div>
                    <div class="support-button d-flex align-items-center">
                        <a class="obrien-button primary-btn" href="contact.php">Contact now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Support Area End Here -->
</div>

<!-- Modal Area Start Here -->
<div class="modal fade obrien-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close close-button" data-bs-dismiss="modal" aria-label="Close">
                <span class="close-icon" aria-hidden="true">x</span>
            </button>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 text-center">
                            <div class="product-image">
                                <img src="assets/images/product/1.jpg" alt="Product Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="modal-product">
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title">Product dummy name</h4>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$80.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>1 Review</span>
                                    </div>
                                    <p class="desc-content">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame bel...</p>
                                    <form class="d-flex flex-column w-100" action="#">
                                        <div class="form-group">
                                            <select class="form-control nice-select w-100">
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                                <option>XXL</option>
                                            </select>
                                        </div>
                                    </form>
                                    <div class="quantity-with_btn">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="0" type="text">
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                        </div>
                                        <div class="add-to_cart">
                                            <a class="btn obrien-button primary-btn" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Area End Here -->

<!-- Scroll to Top Start -->
<a class="scroll-to-top" href="#">
    <i class="ion-chevron-up"></i>
</a>


<?php include("./include/footer.php"); ?>