<?php 
include ("./admin/db-conn.php");
$pageTitle = "Our Services";
include ("./include/header.php");
include ("./include/breadcrumb.php");

$sql = "SELECT * FROM services ORDER BY id DESC";
$result = $conn->query($sql);

// Ek khali array banayenge jisme hum saara data store karenge
// Taki same data ko hum Grid aur Popup dono ke liye use kar sakein
$servicesData = [];
?>

<section class="services-section py-5 bg-theme-soft">
    <div class="container py-lg-5">
        <div class="text-center mb-5 animate-fade-up">
            <h5 class="theme-subtitle">What We Offer</h5>
            <h2 class="theme-title">Premium Agricultural Solutions</h2>
        </div>

        <div class="row g-4">
            
            <?php
            if ($result && $result->num_rows > 0) {
                $delay = 1; 
                
                while ($row = $result->fetch_assoc()) {
                    $servicesData[] = $row; 
                    
                    $ser_id = $row['id'];
                    $ser_title = htmlspecialchars($row['service_name'] ?? 'Service Name'); // Update 'title' as per your DB
                    $ser_short_desc = htmlspecialchars($row['short_desc'] ?? 'Short description goes here.'); // Update 'short_description'
                    
                    $img_path = !empty($row['image']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['image']) : "assets/images/product/p-3.png";
                    $icons = ['bi-globe', 'bi-box-seam', 'bi-layers', 'bi-truck', 'bi-shield-check'];
                    $random_icon = $icons[$delay % count($icons)]; 
            ?>
            
            <div class="col-lg-4 col-md-6 animate-fade-up delay-<?= $delay > 3 ? 1 : $delay ?>">
                <div class="service-card rounded-4 bg-white shadow-sm h-100 d-flex flex-column">
                    <div class="img-wrapper rounded-top-4 overflow-hidden" style="height: 220px;">
                        <img src="<?= $img_path ?>" alt="<?= $ser_title ?>" class="img-fluid w-100 h-100 object-fit-cover">
                        <div class="service-icon"><i class="bi <?= $random_icon ?>"></i></div>
                    </div>
                    <div class="card-body p-4 text-center d-flex flex-column mt-auto">
                        <h4 class="fw-bold mb-3"><?= $ser_title ?></h4>
                        <p class="text-muted mb-4 small flex-grow-1"><?= $ser_short_desc ?></p>
                        
                        <button type="button" class="btn btn-outline-theme rounded-pill px-4 mt-auto" data-bs-toggle="modal" data-bs-target="#serviceModal_<?= $ser_id ?>">
                            View Details <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <?php 
                    $delay++;
                }
            } else {
                echo "<div class='col-12 text-center'><p>No services found.</p></div>";
            }
            ?>

        </div>
    </div>
</section>

<!-- =======================
     Dynamic Service Modals (Popups)
======================== -->

<?php 
if (!empty($servicesData)) {
    foreach ($servicesData as $service) {
        $ser_id = $service['id'];
        $ser_title = htmlspecialchars($service['service_name'] ?? 'Service Name'); // Update DB column name
        $ser_long_desc = htmlspecialchars($service['long_desc'] ?? 'Detailed description of the service goes here.'); // Update DB column name
        
        $img_path = !empty($service['image']) ? "admin/assets/img/uploads/" . htmlspecialchars($service['image']) : "assets/images/product/p-3.png";
?>
<div class="modal custom-modal fade" id="serviceModal_<?= $ser_id ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 border-0 shadow-lg">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-md-5 pt-0">
                <div class="row align-items-center">
                    <div class="col-md-5 mb-4 mb-md-0">
                        <img src="<?= $img_path ?>" alt="<?= $ser_title ?>" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" style="height: 300px;">
                    </div>
                    <div class="col-md-7 ps-md-4">
                        <h3 class="theme-title mb-3"><?= $ser_title ?></h3>
                        <div class="text-muted"><?= $ser_long_desc ?></div>
                        
                        <ul class="list-unstyled text-muted mt-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> 100% Organic & Certified</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> Industry Standard Protocols</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-theme-primary me-2"></i> Timely Execution</li>
                        </ul>
                        
                        <a href="contact.php?service=<?= urlencode($ser_title) ?>" class="btn btn-theme-primary rounded-pill px-4 mt-3">Request a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    }
}
?>

<?php include ("./include/footer.php"); ?>