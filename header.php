<?php
// Database connection and category fetch
$categories = [];
$totalCount = 0;

try {
    $db = new PDO('mysql:host=localhost;dbname=travelsl_db', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Get distinct categories with count - TRIM removes extra spaces for accurate results
    $stmt = $db->query("SELECT TRIM(category) as category, COUNT(*) as count FROM place GROUP BY TRIM(category) ORDER BY category ASC");
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Get total count
    $totalStmt = $db->query("SELECT COUNT(*) as total FROM place");
    $totalResult = $totalStmt->fetch(PDO::FETCH_ASSOC);
    $totalCount = $totalResult['total'];
} catch (PDOException $e) {
    // Fallback if database connection fails
    $categories = [];
    $totalCount = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelSL</title>
    <link rel="stylesheet" href="styles-2/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="super_container">

    <!-- TOP BAR -->
    <div class="top_bar">
        <div class="container">
            <div class="social">
                <ul class="social_list">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- MAIN NAV -->
    <nav class="main_nav">
        <div class="container">
            <div class="nav_inner">

                <!-- LOGO -->
                <div class="logo_container">
                    <a href="index.php" class="logo">
                        <div class="logo_pin">
                            <div class="logo_pin_dot"></div>
                        </div>
                        <span>TRAVELSL</span>
                    </a>
                </div>

                <!-- NAV LINKS -->
                <ul class="main_nav_list">
                    <li class="main_nav_item <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
                        <a href="index.php">HOME</a>
                    </li>
                    <li class="main_nav_item <?= basename($_SERVER['PHP_SELF']) == 'about.html' ? 'active' : '' ?>">
                        <a href="about.html">ABOUT US</a>
                    </li>
                    <li class="main_nav_item <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">
                        <a href="contact.php">CONTACT US</a>
                    </li>
                    <li class="main_nav_item <?= basename($_SERVER['PHP_SELF']) == 'trip-cost.php' ? 'active' : '' ?>">
                        <a href="trip-cost.php">TRIP COST CALCULATE</a>
                    </li>
                </ul>

                <!-- HAMBURGER -->
                <div class="hamburger" id="hamburger">
                    <i class="fa fa-bars"></i>
                </div>

            </div>
        </div>
    </nav>

    <!-- MOBILE MENU -->
    <div class="mobile_menu" id="mobileMenu">
        <div class="mobile_menu_close" id="menuClose">
            <span></span>
            <span></span>
        </div>
        <div class="mobile_menu_logo">
            <a href="index.php" class="logo">
                <div class="logo_pin"><div class="logo_pin_dot"></div></div>
                <span>TRAVELSL</span>
            </a>
        </div>
        <ul class="mobile_nav_list">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
            <li><a href="trip-cost.php">TRIP COST CALCULATE</a></li>
        </ul>
    </div>

    <!-- HERO -->
    <div class="home_hero">
        <div class="hero_bg" style="background-image: url('images/home.webp');"></div>
        <div class="hero_overlay"></div>
        <div class="hero_content">
            <div class="hero_eyebrow">+ CURATED FOR YOU</div>
            <h1 class="hero_title">
                Best Places to<br>
                <span class="hero_title_orange">Recommend</span> For You
            </h1>
        </div>
        <div class="hero_bottom_bar"></div>
    </div>

    <!-- FILTER STRIP -->
    <div class="filter_strip">
        <div class="filter_tags">
            <button class="filter_btn active" data-category="ALL">ALL DESTINATIONS</button>
            <?php foreach ($categories as $category): ?>
                <button class="filter_btn" data-category="<?php echo htmlspecialchars($category['category']); ?>">
                    <?php echo htmlspecialchars(strtoupper($category['category'])); ?> (<?php echo $category['count']; ?>)
                </button>
            <?php endforeach; ?>
        </div>
        <div class="filter_count"><?php echo $totalCount; ?> Results Found</div>
    </div>

    <!-- PRELOADER -->
    <div class="preloader" id="preloader">
        <div class="preloader_inner">
            <div class="preloader_bar"></div>
            <div class="preloader_bar"></div>
            <div class="preloader_bar"></div>
            <div class="preloader_bar"></div>
        </div>
    </div>

</div><!-- end super_container -->

<script src="js/header.js"></script>
</body>
</html>