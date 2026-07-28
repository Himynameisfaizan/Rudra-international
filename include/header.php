<?php
// Get current page name to make navigation links active dynamically
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rudra International</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Premium Organic Potatoes Export">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/include.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/services.css">
    <link rel="stylesheet" href="assets/css/blogs.css">
    <link rel="stylesheet" href="assets/css/product.css">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>

<body>
    <div class="home-wrapper home-2">
        <!-- Header Area Start Here -->
        <header class="main-header-area">
            
            <!-- Header Top Area Start Here -->
            <div class="header-top-area header-top-2">
                <div class="container container-default-2 custom-area">
                    <div class="row">
                        <div class="col-12 col-custom header-top-wrapper text-center">
                            <div class="short-desc">
                                <p>Support Center: <strong><a href="tel:+919687613713" title="tel:+919687613713">+91 9687613713 </a></strong></p>
                                <p> Email: <a href="mailto:info@rudrainternational.com" title="mailto:info@rudrainternational.com">info@rudrainternational.com</a></p>
                            </div>
                            <span class="top-close-button">X</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Header Area Start -->
            <div class="main-header">
                <div class="container container-default custom-area">
                    <div class="row">
                        <div class="col-lg-12 col-custom">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                    <div class="header-logo d-flex align-items-center">
                                        <a href="index.php">
                                            <img class="img-full" src="assets/images/logo/logo.png" alt="Header Logo">
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Desktop Navigation -->
                                <div class="col-lg-7 col-xl-7 position-static d-none d-lg-block col-custom">
                                    <nav class="main-nav d-flex justify-content-center">
                                        <ul class="nav">
                                            <li><a class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php"><span class="menu-text">Home</span></a></li>
                                            <li><a class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>" href="about.php"><span class="menu-text">About</span></a></li>
                                            <li><a class="<?= ($currentPage == 'services.php') ? 'active' : '' ?>" href="services.php"><span class="menu-text">Services</span></a></li>
                                            <li><a class="<?= ($currentPage == 'products.php' || $currentPage == 'product-details.php') ? 'active' : '' ?>" href="products.php"><span class="menu-text">Products</span> <i class="fa fa-angle-down"></i></a></li>
                                            <li><a class="<?= ($currentPage == 'blogs.php' || $currentPage == 'blog-details.php') ? 'active' : '' ?>" href="blogs.php"><span class="menu-text">Blogs</span> <i class="fa fa-angle-down"></i></a></li>
                                            <li><a class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="contact.php"><span class="menu-text">Contact</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                
                                <!-- Call to Action Button -->
                                <div class="col-lg-3 col-xl-3 col-sm-6 col-6 col-custom d-flex justify-content-end align-items-center">
                                    <a href="contact.php" class="btn-request-call">
                                        <i class="bi bi-headset me-2"></i> Request a Call
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sticky Header Start Here-->
            <div class="main-header header-sticky">
                <div class="container container-default custom-area">
                    <div class="row">
                        <div class="col-lg-12 col-custom">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                    <div class="header-logo">
                                        <a href="index.php">
                                            <img class="img-full" src="assets/images/logo/logo.png" alt="Header Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-xl-7 position-static d-none d-lg-block col-custom">
                                    <nav class="main-nav d-flex justify-content-center">
                                        <ul class="nav">
                                            <!-- Same PHP logic for sticky header active states -->
                                            <li><a class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php"><span class="menu-text">Home</span></a></li>
                                            <li><a class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>" href="about.php"><span class="menu-text">About</span></a></li>
                                            <li><a class="<?= ($currentPage == 'services.php') ? 'active' : '' ?>" href="services.php"><span class="menu-text">Services</span></a></li>
                                            <li><a class="<?= ($currentPage == 'products.php' || $currentPage == 'product-details.php') ? 'active' : '' ?>" href="products.php"><span class="menu-text">Products</span></a></li>
                                            <li><a class="<?= ($currentPage == 'blogs.php' || $currentPage == 'blog-details.php') ? 'active' : '' ?>" href="blogs.php"><span class="menu-text">Blogs</span></a></li>
                                            <li><a class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="contact.php"><span class="menu-text">Contact</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-lg-3 col-xl-3 col-sm-6 col-6 col-custom d-flex justify-content-end align-items-center">
                                    <a href="contact.php" class="btn-request-call">
                                        <i class="bi bi-headset me-2"></i> Request a Call
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- off-canvas menu start (Mobile Menu) -->
            <aside class="off-canvas-wrapper" id="mobileMenu">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="off-canvas-inner">
                        <div class="search-box-offcanvas">
                            <form>
                                <input type="text" placeholder="Search product...">
                                <button class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        
                        <!-- mobile menu navigation start -->
                        <div class="mobile-navigation">
                            <nav>
                                <ul class="mobile-menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="products.php">Products</a></li>
                                    <li><a href="blogs.php">Blogs</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        
                        <!-- offcanvas widget area -->
                        <div class="offcanvas-widget-area">
                            <div class="top-info-wrap text-left text-black">
                                <ul>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:+919687613713">+91 96876 13713</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:info@rudrainternational.com">info@rudrainternational.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="off-canvas-widget-social">
                                <a title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </header>