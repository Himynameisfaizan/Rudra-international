<?php 
include 'include/header.php'; 

$pageTitle = "Blog Details"; 
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
                        <img src="assets/images/product/p-1.png" alt="5 Benefits of Choosing Organic Potatoes" class="img-fluid w-100 object-fit-cover" style="max-height: 450px;">
                        <div class="blog-date-badge text-center">
                            <span class="day">15</span>
                            <span class="month">AUG</span>
                        </div>
                    </div>

                    <div class="p-4 p-lg-5">
                        <!-- Meta Info -->
                        <ul class="blog-meta list-unstyled d-flex flex-wrap mb-4 small text-muted border-bottom pb-3">
                            <li class="me-4"><i class="bi bi-person text-theme-primary me-1"></i> By Admin</li>
                            <li class="me-4"><i class="bi bi-tag text-theme-primary me-1"></i> Organic Farming</li>
                            <li><i class="bi bi-chat-dots text-theme-primary me-1"></i> 3 Comments</li>
                        </ul>
                        
                        <!-- Title -->
                        <h2 class="theme-title mb-4">5 Benefits of Choosing Organic Potatoes</h2>
                        
                        <!-- Content -->
                        <div class="blog-rich-text text-muted">
                            <p>Discover how organically grown potatoes offer better nutritional value and why they are the right choice for your family's daily diet and long-term health. At Rudra International, we take pride in our sustainable farming methods.</p>
                            
                            <p>Organic farming ensures that no synthetic pesticides or fertilizers are used. This not only protects the environment but also keeps the soil rich and fertile for future generations. When you choose organic, you are making a conscious choice for a healthier lifestyle.</p>
                            
                            <!-- Custom Premium Blockquote -->
                            <blockquote class="custom-blockquote my-4">
                                <i class="bi bi-quote quote-icon"></i>
                                <p class="mb-0 h5 fw-normal text-dark">"The true wealth of a nation lies in the health of its soil and the purity of its harvest. Organic farming is not just a method; it's a commitment to the future."</p>
                            </blockquote>
                            
                            <h4 class="text-dark mt-5 mb-3">1. Better Nutritional Value</h4>
                            <p>Studies have shown that organically grown crops, including potatoes, often contain higher levels of certain antioxidants and vitamins. Without the interference of chemical fertilizers, the plants develop their natural defenses, which translates to better nutrients for you.</p>

                            <h4 class="text-dark mt-4 mb-3">2. Better Taste and Texture</h4>
                            <p>Many chefs and home cooks swear by the superior taste and texture of organic potatoes. They tend to be denser, hold their shape better when cooked, and have an authentic, earthy flavor that elevates any dish.</p>
                        </div>

                        <!-- Article Footer (Tags & Share) -->
                        <div class="article-footer d-flex flex-wrap justify-content-between align-items-center mt-5 pt-4 border-top">
                            <div class="blog-tags mb-3 mb-md-0">
                                <span class="fw-bold text-dark me-2">Tags:</span>
                                <a href="#">Organic</a>
                                <a href="#">Farming</a>
                                <a href="#">Health</a>
                            </div>
                            <div class="blog-share">
                                <span class="fw-bold text-dark me-2">Share:</span>
                                <a href="#" class="share-btn facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="share-btn twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="share-btn linkedin"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="share-btn whatsapp"><i class="bi bi-whatsapp"></i></a>
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
                 Right Side: Sidebar (Same as blog.php)
            ======================== -->
            <div class="col-lg-4 mt-5 mt-lg-0 animate-fade-up delay-2">
                <div class="blog-sidebar">
                    
                    <!-- Search Widget -->
                    <div class="widget bg-white p-4 rounded-4 shadow-sm mb-4">
                        <h4 class="widget-title h5 mb-3 fw-bold">Search</h4>
                        <div class="input-group">
                            <input type="text" class="form-control custom-input rounded-start-pill shadow-none" placeholder="Search...">
                            <button class="btn btn-theme-primary rounded-end-pill px-3" type="button"><i class="bi bi-search"></i></button>
                        </div>
                    </div>

                    <!-- Recent Posts Widget -->
                    <div class="widget bg-white p-4 rounded-4 shadow-sm mb-4">
                        <h4 class="widget-title h5 mb-4 fw-bold">Recent Posts</h4>
                        
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                            <img src="assets/images/product/p-3.png" alt="Post" class="rounded-3 me-3 object-fit-cover" width="70" height="70">
                            <div>
                                <h6 class="mb-1"><a href="#" class="text-dark text-decoration-none post-hover">How We Ensure Export Quality</a></h6>
                                <span class="small text-muted"><i class="bi bi-calendar3 me-1"></i> 02 Sep, 2023</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center">
                            <img src="assets/images/product/p-4.png" alt="Post" class="rounded-3 me-3 object-fit-cover" width="70" height="70">
                            <div>
                                <h6 class="mb-1"><a href="#" class="text-dark text-decoration-none post-hover">Tips for Storing Potatoes</a></h6>
                                <span class="small text-muted"><i class="bi bi-calendar3 me-1"></i> 28 Aug, 2023</span>
                            </div>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="widget bg-white p-4 rounded-4 shadow-sm">
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
</section>

<?php 
include 'include/footer.php'; 
?>