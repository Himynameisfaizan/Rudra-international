<?php 
include ("./admin/db-conn.php"); // Database Connection add kiya
$pageTitle = "Our Blogs"; // Updated title
include ("./include/header.php"); 
include 'include/breadcrumb.php'; 

// Fetch Published Blogs from Database
$sql_blogs = "SELECT * FROM blogs WHERE status = 'published' ORDER BY created_at DESC";
$result_blogs = $conn->query($sql_blogs);
?>

<!-- =======================
     Blog Grid Section
======================== -->
<section class="blog-section py-5 bg-theme-soft">
    <div class="container py-lg-4">
        <div class="row">
            
            <!-- =======================
                 Left Side: Main Blog List
            ======================== -->
            <div class="col-lg-8">
                
                <?php
                if ($result_blogs && $result_blogs->num_rows > 0) {
                    $delay = 0; // Animation delay ke liye
                    
                    while ($row = $result_blogs->fetch_assoc()) {
                        $blog_id = $row['id'];
                        $title = htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8');
                        $author = !empty($row['author']) ? htmlspecialchars($row['author'], ENT_QUOTES, 'UTF-8') : "Admin";
                        
                        // Date formatting for the dynamic badge
                        $date_day = date('d', strtotime($row['created_at']));
                        $date_month = date('M', strtotime($row['created_at']));

                        // Content cleaning & Trimming for Excerpt (Short description)
                        $raw_content = html_entity_decode($row['content']);
                        $clean_text = strip_tags($raw_content);
                        $excerpt = mb_strlen($clean_text) > 140 ? mb_substr($clean_text, 0, 140) . "..." : $clean_text;

                        // Image Path Logic
                        $img_path = !empty($row['image']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['image']) : "assets/images/product/p-1.png";
                        
                        // Set animation delay class
                        $delay_class = $delay > 0 ? "delay-" . min($delay, 3) : "";
                ?>
                <!-- Dynamic Blog Post -->
                <div class="blog-list-card bg-white rounded-4 shadow-sm mb-4 animate-fade-up <?= $delay_class ?>">
                    <div class="row g-0 align-items-center h-100">
                        <!-- Blog Image -->
                        <div class="col-md-5 h-100">
                            <div class="blog-img-wrap rounded-start-4 overflow-hidden position-relative h-100 min-vh-25">
                                <img src="<?= $img_path ?>" alt="<?= $title ?>" class="img-fluid w-100 h-100 object-fit-cover" style="min-height: 250px;">
                                <!-- Floating Date Badge -->
                                <div class="blog-date-badge text-center position-absolute m-3 z-3">
                                    <span class="day fw-bold fs-4 d-block lh-1 text-white"><?= $date_day ?></span>
                                    <span class="month small fw-semibold text-white"><?= $date_month ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Content -->
                        <div class="col-md-7">
                            <div class="blog-content p-4 p-lg-5">
                                <!-- Meta Info (Admin) -->
                                <ul class="blog-meta list-unstyled d-flex flex-wrap mb-2 small text-muted">
                                    <li class="me-3"><i class="bi bi-person text-theme-primary me-1"></i> By <?= $author ?></li>
                                    <!-- Tumhare DB me blog categories nahi thi, isliye tag static rakha hai ya hata sakte ho -->
                                    <li><i class="bi bi-tag text-theme-primary me-1"></i> Article</li>
                                </ul>
                                
                                <h3 class="blog-title h4 mb-3">
                                    <a href="blog-details.php?id=<?= $blog_id ?>" class="text-dark text-decoration-none"><?= $title ?></a>
                                </h3>
                                
                                <p class="text-muted mb-4"><?= $excerpt ?></p>
                                
                                <a href="blog-details.php?id=<?= $blog_id ?>" class="read-more-link fw-bold text-theme-primary text-decoration-none">
                                    Continue Reading <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                        $delay++;
                    } 
                } else {
                    echo "<div class='alert alert-info rounded-4'>No blogs found at the moment. Please check back later.</div>";
                }
                ?>

                <!-- Pagination (Optional: Keep it static for layout or integrate actual pagination logic later) -->
                <?php if ($result_blogs && $result_blogs->num_rows > 0): ?>
                <nav aria-label="Page navigation" class="mt-5 animate-fade-up delay-2">
                    <ul class="pagination justify-content-center custom-pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
                <?php endif; ?>

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
                    <!-- Note: Zenvyara.sql me Blog categories ka table nahi tha, isliye isko abhi static rakha hai -->
                    <div class="widget bg-white p-4 rounded-4 shadow-sm mb-4">
                        <h4 class="widget-title h5 mb-3 fw-bold">Categories</h4>
                        <ul class="list-unstyled mb-0 category-list">
                            <li><a href="#" class="text-decoration-none text-muted">Organic Farming <span>(12)</span></a></li>
                            <li><a href="#" class="text-decoration-none text-muted">Potato Varieties <span>(08)</span></a></li>
                            <li><a href="#" class="text-decoration-none text-muted">Export & Trade <span>(15)</span></a></li>
                            <li><a href="#" class="text-decoration-none text-muted">Healthy Recipes <span>(05)</span></a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<?php include ("./include/footer.php"); ?>