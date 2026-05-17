<?php
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

function test_input($data) {
    // Function to sanitize input data.
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

try {
    $pdo = new PDO('mysql:host=localhost;dbname=travelsl_db', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if it's a POST request and if the search field is set and not empty.
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['search'])) {
        $searchQuery = test_input($_POST['search']); // Sanitize the input.
        $sql = "SELECT url, name, image_url, short_description FROM place WHERE name LIKE :searchQuery"; // SQL query with search condition.
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':searchQuery', "%$searchQuery%");
    } else {
        $sql = "SELECT url, name, image_url, short_description FROM place"; // Default SQL query without search condition.
        $stmt = $pdo->prepare($sql);
    }

    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database travelsl_db: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>All Best Place - travelsl</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/logo-meta.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/allplaces.css">
	<link rel="stylesheet" type="text/css" href="styles/allplaces_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles-2/booking.css">
    <link rel="stylesheet" type="text/css" href="styles/search-results.css">

</head>

<body>

	<div class="super_container">
        

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->

			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="social">
								<ul class="social_list">
									<li class="social_list_item"><a href="#"><i class="fa fa-facebook"
												aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-twitter"
												aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-instagram"
												aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->

			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="travelsl">travelsl</a></div>
							</div>
							<div class="main_nav_container ml-auto">
								<ul class="main_nav_list">
									<li class="main_nav_item"><a href="index.php">home</a></li>
									<li class="main_nav_item"><a href="about.html">about us</a></li>
									<li class="main_nav_item"><a href="contact.html">contact us</a></li>

								</ul>
							</div>

                            <div class="content_search ml-lg-0 ml-auto">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px"
                                    height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path class="mag_glass" fill="#FFFFFF"
                                                    d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
                                            s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
                                            C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
                                            M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
                                            c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
                                            c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
                                            C-2.019,484.77-2.019,497.865,6.057,505.942z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <!-- Search form -->
                            <form method="post" action="" id="search_form" class="search_form bez_1">
                                <input type="text" name="search" placeholder="Search for places..." class="search_content_input bez_1">
                            </form>


							<div class="hamburger">
								<i class="fa fa-bars trans_200"></i>
							</div>
						</div>
					</div>
				</div>
			</nav>

		</header>

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<div class="logo menu_logo"><a href="/"><img src="images/logo.png" alt=""></a></div>
				<ul>
					<li class="menu_item"><a href="/">home</a></li>
					<li class="menu_item"><a href="about.html">about us</a></li>
					<li class="menu_item"><a href="contact.html">contact us</a></li>

				</ul>
			</div>
		</div>

       
	<div class="preloader">
        <div class="load">
            <hr/><hr/><hr/><hr/>
        </div>
    </div>

	<script>
		window.onload = function() {
    // Hide preloader when everything is loaded
    document.querySelector('.preloader').style.display = 'none';

    // Show content
    var contentElements = document.querySelectorAll('.content');
    contentElements.forEach(function(element) {
        element.style.display = 'block';
    });
};

	</script>

        
		<!-- Home -->

		<div class="home">
			<div class="home_background " data-parallax="scroll"
				data-image-src="images/home.webp">
				<div class="color_overlay"></div>

			</div>
			<div class="home_content">
				<div class="home_title">All Best place</div>
			</div>
		</div>





    <div class="search-results-section">
        <div class="section-header">
            <h2>Explore Destinations</h2>
            <p>Discover Sri Lanka's finest destinations curated just for you</p>
            <div class="section-underline"></div>
        </div>

        <div class="cards-grid">
    <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=travelsl_db', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Pagination variables
        $limit = 12; // Number of places per page
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        // Check if search query is submitted
        if(isset($_POST['search'])) {
            $search = $_POST['search'];
            $sql = "SELECT url, name, image_url, short_description FROM place WHERE name LIKE :search LIMIT $limit OFFSET $offset";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':search', "%$search%");
        } else {
            $sql = "SELECT url, name, image_url, short_description FROM place LIMIT $limit OFFSET $offset";
            $stmt = $pdo->prepare($sql);
        }

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($results) {
            foreach ($results as $row) {
                // Clean image path
                $imagePath = str_replace(array('../', './'), '', $row["image_url"]);
                if (strpos($imagePath, '../') !== false) {
                    $imagePath = preg_replace('#^\.\./#', '', $imagePath);
                }
                
                echo "<div class='card'>";
                echo "  <div class='card-img'>";
                echo "    <img src='" . htmlspecialchars($imagePath) . "' alt='" . htmlspecialchars($row["name"]) . "'>";
                echo "    <div class='card-badge'>" . htmlspecialchars($row["name"]) . "</div>";
                echo "  </div>";
                echo "  <div class='card-body'>";
                echo "    <div class='stars'>★★★★<span class='empty-star'>☆</span></div>";
                echo "    <p class='card-description'>" . htmlspecialchars($row["short_description"]) . "</p>";
                echo "  </div>";
                echo "  <div class='card-footer'>";
                echo "    <a href='" . htmlspecialchars($row["url"]) . "' class='read-more'>Read More</a>";
                echo "    <span class='card-tag'>Beach</span>";
                echo "  </div>";
                echo "</div>";
            }

            // Pagination links if total results are more than the limit
            if (count($results) >= $limit) {
                // Pagination links
                $sql = "SELECT COUNT(*) AS total FROM place";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $total_pages = ceil($row['total'] / $limit);

                echo "<div class='paginat'>";

                // Previous button
                if ($page > 1) {
                    echo "<a href='?page=".($page-1)."' class='previous'>Previous</a>";
                }

                // Next button
                if ($page < $total_pages) {
                    echo "<a href='?page=".($page+1)."' class='next'>Next</a>";
                }

                echo "</div>";
            }
        } else {
            echo "<div class='no-results'>There are no places to visit.</div>";
        }
    } catch (PDOException $e) {
        die("Could not connect to the database Truism: " . $e->getMessage());
    }
    ?>
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>
    <script src="styles-2/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="styles-2/custom.js"></script>


</body>

</html>