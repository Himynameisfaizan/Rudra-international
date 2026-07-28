<?php
// Failsafe: Agar galti se variable set na ho, toh default text dikhaye taaki error na aaye
$pageTitle = isset($pageTitle) ? $pageTitle : 'Rudra International';
?>
<!-- Breadcrumb Section Start -->
<section class="rudra-breadcrumb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <!-- Dynamic smooth animated title -->
                <h1 class="page-title animate-fade-up"><?php echo htmlspecialchars($pageTitle); ?></h1>
                
                <!-- Breadcrumb Links -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center animate-fade-up delay-1">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <!-- Dynamic active page name -->
                        <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($pageTitle); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->