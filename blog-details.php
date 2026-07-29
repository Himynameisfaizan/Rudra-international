<?php 
include("./admin/db-conn.php"); 
include 'include/header.php'; 

// URL se Blog ID get karna securely
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch Current Blog Data
$sql = "SELECT * FROM blogs WHERE id = $blog_id AND status = 'published' LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $blog = $result->fetch_assoc();
    
    // Assigning variables
    $title = html_entity_decode($blog['title'], ENT_QUOTES, 'UTF-8');
    $author = !empty($blog['author']) ? htmlspecialchars($blog['author'], ENT_QUOTES, 'UTF-8') : "Admin";
    
    // Formatting date
    $date_day = date('d', strtotime($blog['created_at']));
    $date_month = date('M', strtotime($blog['created_at']));
    
    // Decoding HTML content saved via WYSIWYG editor
    $content = html_entity_decode($blog['content']);
    
    // Image setup
    $img_path = !empty($blog['image']) ? "admin/assets/img/uploads/" . htmlspecialchars($blog['image']) : "assets/images/product/p-1.png";
    
    // Dynamic Page Title for Breadcrumb
    $pageTitle = $title;
} else {
    // Agar blog nahi milta ya link galat hai to blogs page pe bhej do
    echo "<script>window.location.href='blogs.php';</script>";
    exit;
}

include 'include/breadcrumb.php'; 
?>

<section class="blog-details-section py-5 bg-theme-soft">
    <div class="container py-lg-4">
        <div class="row">
            
            <!-- =======================
                 Left Side: Full Blog Content
            ======================== -->
            <div class="col-lg-8 animate-fade-up">
                
                <!-- Main Article Card -->
                <article class="bg-white rounded-4 shadow-sm overflow-hidden mb-5">
                    <!-- Featured Image -->
                    <div class="position-relative">
                        <img src="<?= $img_path ?>" alt="<?= $title ?>" class="img-fluid w-100 object-fit-cover" style="max-height: 450px;">
                        <div class="blog-date-badge text-center position-absolute m-3 z-3 bg-theme-primary text-white p-2 rounded shadow-sm" style="top:15px; left:15px; min-width:60px;">
                            <span class="day d-block fs-4 fw-bold lh-1"><?= $date_day ?></span>
                            <span class="month small fw-semibold text-uppercase"><?= $date_month ?></span>
                        </div>
                    </div>

                    <div class="p-4 p-lg-5">
                        <!-- Meta Info -->
                        <ul class="blog-meta list-unstyled d-flex flex-wrap mb-4 small text-muted border-bottom pb-3">
                            <li class="me-4"><i class="bi bi-person text-theme-primary me-1"></i> By <?= $author ?></li>
                            <li class="me-4"><i class="bi bi-tag text-theme-primary me-1"></i> Article</li>
                        </ul>
                        
                        <!-- Title -->
                        <h2 class="theme-title mb-4"><?= $title ?></h2>
                        
                        <!-- Dynamic Content from Database -->
                        <div class="blog-rich-text text-muted">
                            <?= $content ?>
                        </div>

                        <!-- Article Footer (Tags & Share) -->
                        <div class="article-footer d-flex flex-wrap justify-content-between align-items-center mt-5 pt-4 border-top">
                            <div class="blog-tags mb-3 mb-md-0">
                                <span class="fw-bold text-dark me-2">Share this post:</span>
                            </div>
                            <div class="blog-share">
                                <!-- Dynamic Share Links -->
                                <?php $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($current_url) ?>" target="_blank" class="share-btn facebook"><i class="bi bi-facebook"></i></a>
                                <a href="https://twitter.com/intent/tweet?url=<?= urlencode($current_url) ?>&text=<?= urlencode($title) ?>" target="_blank" class="share-btn twitter"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($current_url) ?>" target="_blank" class="share-btn linkedin"><i class="bi bi-linkedin"></i></a>
                                <a href="https://api.whatsapp.com/send?text=<?= urlencode($title . " " . $current_url) ?>" target="_blank" class="share-btn whatsapp"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- =======================
                     Comment Section Form
                ======================== -->
                <div class="comment-form-box bg-white p-4 p-lg-5 rounded-4 shadow-sm animate-fade-up delay-1">
                    <h3 class="theme-title h4 mb-4">Leave a Reply</h3>
                    <p class="text-muted mb-4 small">Your email address will not be published. Required fields are marked *</p>
                    
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control custom-input" placeholder="Your Name *" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control custom-input" placeholder="Your Email *" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control custom-input" rows="5" placeholder="Write your comment here..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-theme-primary rounded-pill px-5 py-2">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <!-- =======================
                 Right Side: Sidebar
            ======================== -->
            <div class="col-lg-4 mt-5 mt-lg-0 animate-fade-up delay-2">
                <div class="blog-sidebar">
                    
                    <!-- Search Widget -->
                    <div class="widget bg-white p-4 rounded-4 shadow-sm mb-4">
                        <h4 class="widget-title h5 mb-3 fw-bold">Search</h4>
                        <form action="blogs.php" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control custom-input rounded-start-pill shadow-none" placeholder="Search...">
                                <button type="submit" class="btn btn-theme-primary rounded-end-pill px-3"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- Dynamic Recent Posts Widget -->
                    <div class="widget bg-white p-4 rounded-4 shadow-sm mb-4">
                        <h4 class="widget-title h5 mb-4 fw-bold">Recent Posts</h4>
                        
                        <?php
                        // Fetch latest 4 blogs excluding the current one
                        $sql_recent = "SELECT id, title, image, created_at FROM blogs WHERE status = 'published' AND id != $blog_id ORDER BY created_at DESC LIMIT 4";
                        $result_recent = $conn->query($sql_recent);
                        
                        if ($result_recent && $result_recent->num_rows > 0) {
                            while ($recent = $result_recent->fetch_assoc()) {
                                $rec_id = $recent['id'];
                                $rec_title = htmlspecialchars($recent['title'], ENT_QUOTES, 'UTF-8');
                                $rec_date = date('d M, Y', strtotime($recent['created_at']));
                                $rec_img = !empty($recent['image']) ? "admin/assets/img/uploads/" . htmlspecialchars($recent['image']) : "assets/images/product/p-3.png";
                        ?>
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                            <img src="<?= $rec_img ?>" alt="<?= $rec_title ?>" class="rounded-3 me-3 object-fit-cover" width="70" height="70">
                            <div>
                                <h6 class="mb-1">
                                    <a href="blog-details.php?id=<?= $rec_id ?>" class="text-dark text-decoration-none post-hover">
                                        <?= mb_strlen($rec_title) > 40 ? mb_substr($rec_title, 0, 40) . "..." : $rec_title ?>
                                    </a>
                                </h6>
                                <span class="small text-muted"><i class="bi bi-calendar3 me-1"></i> <?= $rec_date ?></span>
                            </div>
                        </div>
                        <?php 
                            }
                        } else {
                            echo "<p class='text-muted small'>No recent posts available.</p>";
                        }
                        ?>
                    </div>

                    <!-- Categories Widget (Static for now as DB doesn't have blog categories) -->
                  <!-- Categories Widget -->
<div class="widget bg-white p-4 rounded-4 shadow-sm">
    <h4 class="widget-title h5 mb-3 fw-bold">Categories</h4>
    <ul class="list-unstyled mb-0 category-list">
        <?php
        // Fetch active categories and count items inside them dynamically
        $cat_sql = "SELECT c.cate_id, c.categories, 
                           (SELECT COUNT(*) FROM products p WHERE p.pro_cate = c.cate_id AND p.status = 1) as total_items 
                    FROM categories c 
                    WHERE c.status = 1";
        $cat_result = $conn->query($cat_sql);

        if ($cat_result && $cat_result->num_rows > 0) {
            while ($category = $cat_result->fetch_assoc()) {
                $cat_name = htmlspecialchars($category['categories']); // Category ka naam
                $cat_count = $category['total_items']; // Dynamic count
                
                // Link ko aap blog ya product page par redirect karwa sakte hain
                $cat_link = "products.php?category=" . htmlspecialchars($category['cate_id']); 
        ?>
        <li>
            <a href="<?= $cat_link ?>" class="text-decoration-none text-muted d-flex justify-content-between align-items-center">
                <?= $cat_name ?> <span>(<?= sprintf("%02d", $cat_count) ?>)</span>
            </a>
        </li>
        <?php 
            }
        } else {
            echo "<li><span class='text-muted small'>No categories found.</span></li>";
        }
        ?>
    </ul>
</div>

                </div>
            </div>

        </div>
    </div>
</section>

<?php 
include 'include/footer.php'; 
?>