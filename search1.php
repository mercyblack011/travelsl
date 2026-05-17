<?php
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// ── Categories for filter strip (from DB) ─────────────────────────────────
$categories = [];
$totalCount  = 0;

try {
    $db = new PDO('mysql:host=localhost;dbname=travelsl_db', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // If province is posted, show only categories in that province
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['province'])) {
        $prov = test_input($_POST['province']);

        $catStmt = $db->prepare(
            "SELECT TRIM(category) as category, COUNT(*) as count
             FROM place WHERE province = :province
             GROUP BY TRIM(category) ORDER BY TRIM(category) ASC"
        );
        $catStmt->execute([':province' => $prov]);
        $categories = $catStmt->fetchAll(PDO::FETCH_ASSOC);

        $totStmt = $db->prepare("SELECT COUNT(*) as total FROM place WHERE province = :province");
        $totStmt->execute([':province' => $prov]);
        $totalCount = $totStmt->fetch(PDO::FETCH_ASSOC)['total'];

    } else {
        // No search yet — show all categories
        $catStmt    = $db->query("SELECT TRIM(category) as category, COUNT(*) as count FROM place GROUP BY TRIM(category) ORDER BY TRIM(category) ASC");
        $categories = $catStmt->fetchAll(PDO::FETCH_ASSOC);
        $totalCount = $db->query("SELECT COUNT(*) as total FROM place")->fetch(PDO::FETCH_ASSOC)['total'];
    }
} catch (PDOException $e) {
    $categories = [];
    $totalCount  = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Best Place - Travelsl</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/logo-meta.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/search.css">
    <link rel="stylesheet" type="text/css" href="styles/search_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles-2/booking.css">
    <link rel="stylesheet" type="text/css" href="styles/search-results.css">
    <link rel="stylesheet" href="styles-2/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
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
               <div class="logo_container" style="
    margin-top: 5px;
">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelsl</a></div>
							</div>
                <ul class="main_nav_list">
                    <li class="main_nav_item"><a href="index.php">HOME</a></li>
                    <li class="main_nav_item"><a href="about.html">ABOUT US</a></li>
                    <li class="main_nav_item"><a href="contact.php">CONTACT US</a></li>
                </ul>
                <div class="hamburger" id="hamburger">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- MOBILE MENU -->
    <div class="mobile_menu" id="mobileMenu">
        <div class="mobile_menu_close" id="menuClose">
            <span></span><span></span>
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
            <button class="filter_btn active" data-category="ALL" data-count="<?php echo $totalCount; ?>">
                ALL DESTINATIONS
            </button>
            <?php foreach ($categories as $cat): ?>
                <button class="filter_btn"
                        data-category="<?php echo htmlspecialchars(trim($cat['category'])); ?>"
                        data-count="<?php echo $cat['count']; ?>">
                    <?php echo htmlspecialchars(strtoupper(trim($cat['category']))); ?> (<?php echo $cat['count']; ?>)
                </button>
            <?php endforeach; ?>
        </div>
        <div class="filter_count" id="filterCount"><?php echo $totalCount; ?> Results Found</div>
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

    <!-- PHP script for processing form submissions and fetching data from the database -->
    <div class="search-results-section">
        <div class="section-header">
            <h2>Explore Destinations</h2>
            <p>Discover Sri Lanka's finest destinations curated just for you</p>
            <div class="section-underline"></div>
        </div>

        <div class="cards-grid" id="cardsGrid">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['province'])) {
            $province = test_input($_POST['province']);

            try {
                $pdo = new PDO('mysql:host=localhost;dbname=travelsl_db', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // ✅ Added TRIM(category) to SELECT so we can put it on each card
                $sql = "SELECT url, name, image_url, short_description, TRIM(category) as category
                        FROM place
                        WHERE province = :province
                        ORDER BY TRIM(category) ASC, name ASC";

                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':province', $province, PDO::PARAM_STR);
                $stmt->execute();

                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ($results) {
                    foreach ($results as $row) {
                        // Clean image path
                        $imagePath = str_replace(array('../', './'), '', $row["image_url"]);
                        if (strpos($imagePath, '../') !== false) {
                            $imagePath = preg_replace('#^\.\./#', '', $imagePath);
                        }

                        // ✅ data-category on the card div — matches the filter button exactly
                        $cat = htmlspecialchars(trim($row["category"]));

                        echo "<div class='card' data-category='" . $cat . "'>";
                        echo "  <div class='card-img'>";
                        echo "    <img src='" . htmlspecialchars($imagePath) . "' alt='" . htmlspecialchars($row["name"]) . "' loading='lazy'>";
                        echo "    <div class='card-badge'>" . htmlspecialchars($row["name"]) . "</div>";
                        echo "  </div>";
                        echo "  <div class='card-body'>";
                        echo "    <div class='stars'>★★★★<span class='empty-star'>☆</span></div>";
                        echo "    <p class='card-description'>" . htmlspecialchars($row["short_description"]) . "</p>";
                        echo "  </div>";
                        echo "  <div class='card-footer'>";
                        echo "    <a href='" . htmlspecialchars($row["url"]) . "' class='read-more'>Read More</a>";
                        echo "    <span class='card-tag'>" . $cat . "</span>"; // ✅ Real category not hardcoded "Beach"
                        echo "  </div>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='no-results'>There are no places to visit in this province.</div>";
                }
            } catch (PDOException $e) {
                die("Could not connect to the database travelsl_db: " . $e->getMessage());
            }
        }
        ?>
        </div>
    </div>
</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about_custom.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script src="styles-2/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="styles-2/custom.js"></script>

<script>
// ── PRELOADER ──────────────────────────────────────────────────────────────
window.addEventListener('load', function () {
    setTimeout(function () {
        var preloader = document.getElementById('preloader');
        if (preloader) preloader.classList.add('hidden');
    }, 600);
});

// ── HAMBURGER / MOBILE MENU ────────────────────────────────────────────────
var hamburger  = document.getElementById('hamburger');
var mobileMenu = document.getElementById('mobileMenu');
var menuClose  = document.getElementById('menuClose');

if (hamburger) {
    hamburger.addEventListener('click', function () {
        mobileMenu.classList.add('open');
        document.body.style.overflow = 'hidden';
    });
}
if (menuClose) {
    menuClose.addEventListener('click', function () {
        mobileMenu.classList.remove('open');
        document.body.style.overflow = '';
    });
}
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mobileMenu) {
        mobileMenu.classList.remove('open');
        document.body.style.overflow = '';
    }
});

// ── FILTER BUTTONS ─────────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', function () {

    var filterBtns = document.querySelectorAll('.filter_btn');
    var countEl    = document.getElementById('filterCount');

    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {

            // 1. Swap active class
            filterBtns.forEach(function (b) { b.classList.remove('active'); });
            this.classList.add('active');

            // trim + lowercase both sides — fixes any DB leading/trailing space bugs
            var selected = this.getAttribute('data-category').trim().toLowerCase();
            var count    = this.getAttribute('data-count');

            // 2. Query cards fresh on every click
            var cards   = document.querySelectorAll('#cardsGrid .card');
            var visible = 0;

            cards.forEach(function (card) {
                var cardCat = (card.getAttribute('data-category') || '').trim().toLowerCase();

                if (selected === 'all' || cardCat === selected) {
                    card.style.display = '';
                    visible++;
                } else {
                    card.style.display = 'none';
                }
            });

            // 3. Update result count
            if (countEl) {
                countEl.textContent = (count ? count : visible) + ' Results Found';
            }

            // 4. Remove old no-match message
            var existingMsg = document.querySelector('.no-results-filter');
            if (existingMsg) existingMsg.remove();

            // 5. Show no-match message if nothing visible
            if (visible === 0) {
                var grid = document.getElementById('cardsGrid');
                if (grid) {
                    var msg = document.createElement('div');
                    msg.className = 'no-results-filter';
                    msg.style.cssText = 'grid-column:1/-1;text-align:center;padding:60px 20px;color:#666;font-size:14px;font-weight:600;';
                    msg.textContent = 'No places found for this category.';
                    grid.appendChild(msg);
                }
            }
        });
    });

});
</script>

</body>
</html>