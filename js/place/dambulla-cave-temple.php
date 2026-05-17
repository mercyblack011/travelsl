
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dambulla Cave Temple-Travelsl</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
      <link rel="icon" href="../images/logo-meta.png" type="image/x-icon">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
	<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="../styles/place_styles.css">
	<link rel="stylesheet" type="text/css" href="../styles/place_responsive.css">
	<link rel="stylesheet" type="text/css" href="../plugins-2/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../styles-2/booking.css">
	<link rel="stylesheet" type="text/css" href="../styles/elements_styles.css">
    <link rel="stylesheet" type="text/css" href="../styles/elements_responsive.css">
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
								<div class="logo"><a href="/"><img src="../images/logo.png" alt="">travelsl</a></div>
							</div>
							<div class="main_nav_container ml-auto">
								<ul class="main_nav_list">
									<li class="main_nav_item"><a href="/">home</a></li>
									<li class="main_nav_item"><a href="../about.html">about us</a></li>
									<li class="main_nav_item"><a href="../contact.html">contact us</a></li>
								</ul>
							</div>
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
		<div class="logo menu_logo"><a href="/"><img src="../images/logo.png" alt=""></a></div>
				<ul>
					<li class="menu_item"><a href="/">home</a></li>
					<li class="menu_item"><a href="../about.html">about us</a></li>
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


		<div class="home">
			<?php
			// Establishing a connection to the database
			$servername = "localhost";  // Change this if your MySQL server is hosted elsewhere
			$username = "travelsl_db";      // Replace with your MySQL username
			$password = "(P@ssw0rd)";      // Replace with your MySQL password
			$database = "travelsl_db"; // Replace with your database name
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $database);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// Query to select image_url from the place table
			$sql = "SELECT image_url FROM  place WHERE name = 'Dambulla Cave Temple'"; // Change the WHERE condition as needed
			
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// Output data of each row
				while ($row = $result->fetch_assoc()) {
					// Outputting the image within the <div> element
					echo '<div class="home_background parallax-window" data-parallax="scroll" data-image-src="' . $row["image_url"] . '">   <div class="color_overlay"></div></div>';
				}
			} else {
				echo "0 results";
			}

			// Close connection
			$conn->close();
			?>
			<div class="home_content">
				<div class="home_title">Dambulla Cave Temple
</div>
			</div>
		</div>

	</div>


<!-- Intro -->


<div>
<div class="container">

<section class="content-1">

    <article class="art"> 
        <p> Dambulla Cave Temple, also known as the Golden Temple of Dambulla, is a UNESCO World Heritage Site situated in the central part of Sri Lanka. Carved into the rock face of a massive granite outcrop, this sacred complex comprises five caves adorned with over 150 stunning statues and vibrant frescoes depicting scenes from Buddhist mythology. The cave temple, dating back to the 1st century BC, holds immense religious significance and is considered one of the most important pilgrimage sites in Sri Lanka. Its serene ambiance and exquisite artwork make it a captivating destination for both religious devotees and cultural enthusiasts.</p>
        <p>Perched atop a towering rock outcrop in the heart of Sri Lanka's Cultural Triangle, the Dambulla Cave Temple stands as a testament to the island nation's rich religious and artistic heritage. Carved into the natural caves that dot the rock face, this ancient temple complex is home to a stunning collection of Buddhist murals and sculptures that date back over two millennia.</p>
<p>As you ascend the steps to the entrance of the cave temple, you're greeted by a panoramic view of the surrounding countryside, with lush greenery stretching as far as the eye can see. But it's what lies within the caves that truly takes your breath away – a labyrinthine network of chambers adorned with vibrant frescoes and intricate carvings that tell the story of Lord Buddha's life and teachings.</p>
<p>Each cave within the Dambulla complex is dedicated to a different aspect of Buddhist worship, from meditation and contemplation to prayer and devotion. The largest and most impressive of these caves, known as the Maharaja Vihara, houses over 150 statues of the Buddha in various poses, along with countless murals depicting scenes from his life and previous incarnations.</p>
<p>But it's not just the religious significance of the Dambulla Cave Temple that makes it a must-visit destination; it's also the sheer beauty and craftsmanship of its artistic treasures. The intricate detailing and vibrant colors of the murals are a testament to the skill and dedication of the ancient artisans who created them, offering a glimpse into a bygone era of Sri Lankan artistry.</p>
<p>So whether you're a spiritual seeker, an art enthusiast, or simply someone with an appreciation for beauty and history, the Dambulla Cave Temple beckons with open arms, inviting you to embark on a journey of discovery and enlightenment unlike any other.</p>
    </article>


	<div>

	 <p class="map"> 
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1976.1915485724114!2d80.64831684442747!3d7.854914100000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afca558c5bd3669%3A0xd1daa5c0936b764c!2sDambulla%20Royal%20Cave%20Temple%20and%20Golden%20Temple!5e0!3m2!1sen!2slk!4v1714395110986!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	 </p>

   
</section> 

</div>


<script src="https://use.fontawesome.com/a6f0361695.js"></script>





 <!-- all page  -->

	




<!-- Review Form Head & Php -->

<div class="col text-center">
<h2 class="section_title-2">WE APPRECIATE YOUR REVIEW!</h2>
<h6 id="fh6">Your review will help us to improve our web hosting quality products, and customer services.</h6>
</div>
<br>
<br>

<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$username = 'travelsl_db';
$password = '(P@ssw0rd)';
$dbname = 'travelsl_db';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error messages for individual fields
$nameError = $emailError = $ratingError = $reviewError = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true; // Assume the form is valid initially

    // Validate name
    if (empty($_POST['name'])) {
        $nameError = "Name is required.";
        $isValid = false;
    } else {
        $name = $_POST['name'];
    }

    // Validate email
    if (empty($_POST['email'])) {
        $emailError = "Email is required.";
        $isValid = false;
    } else {
        $email = $_POST['email'];
    }

    // Validate rating
    if (empty($_POST['rating'])) {
        $ratingError = "Rating is required.";
        $isValid = false;
    } else {
        $rating = intval($_POST['rating']);
    }

    // Validate review
    if (empty($_POST['review'])) {
        $reviewError = "Review is required.";
        $isValid = false;
    } else {
        $review = $_POST['review'];
    }

    // Proceed with database insertion if the form is valid
    if ($isValid) {
        $stmt = $conn->prepare("INSERT INTO reviews (name, email, rating, review) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $name, $email, $rating, $review);

        if ($stmt->execute()) {
            // Close the database connection
            $stmt->close();
            // Redirect to / after successful submission
            echo '<script>window.location.href = "";</script>';
            exit(); // Ensure no further code execution after redirection
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }
    }
}
?>

<!-- Review Form -->

<form id="feedback" action="" method="post">
    <br>
    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input name="name" placeholder="Enter Your Name" class="form-control" type="text" style="height: 50px;" required>
            </div>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input name="email" type="email" class="form-control" placeholder="Enter Your Email" style="height: 50px;" required>
            </div>
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-star"></i></span>
                <select class="form-control" name="rating" style="height: 50px;" required>
                    <option value="" disabled selected>Select a rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <textarea class="form-control" name="review" rows="3" placeholder="Write Your Review" style="height: 100px;" required></textarea>
            </div>
        </div>
    </div>
    <br>

    <div class="form-group" >
        <button type="submit" class="button button_line_1 trans_200">Submit<span></span><span></span><span></span></button>
    </div>
</form>



<!-- show Reviews -->

<div class="col text-center">
<h2 class="section_title-3">Rating & Review</h2>
<h6 id="fh6">What people like about it.</h6>
</div>
<br>

<?php
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching all ratings for calculating average rating and total number of ratings
$sqlRatings = "SELECT rating FROM reviews";
$resultRatings = $conn->query($sqlRatings);
$totalRating = 0;
$number_of_ratings = $resultRatings->num_rows;

// Calculate the total rating and average
if ($number_of_ratings > 0) {
    while ($row = $resultRatings->fetch_assoc()) {
        $totalRating += $row['rating'];
    }
    $average_rating = $totalRating / $number_of_ratings;
} else {
    $average_rating = 0;
}

// Fetching and displaying reviews
$sql = "SELECT name, rating, review, DATE_FORMAT(created_at, '%H:%i') as time_ago FROM reviews ORDER BY id DESC";
$result = $conn->query($sql);
$reviews = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
}
$conn->close();
?>


<!-- Rating score -->


<div class="review-container">
	<br>
  <div class="star-rating">
    <?php for ($i = 0; $i < floor($average_rating); $i++): ?>
        <span class="filled">★</span>
    <?php endfor; ?>
    <?php if ($average_rating - floor($average_rating) >= 0.5): ?>
        <span class="filled">★</span>
        <?php for ($i = 0; $i < 4 - floor($average_rating); $i++): ?>
            <span class="empty">☆</span>
        <?php endfor; ?>
    <?php else: ?>
        <?php for ($i = 0; $i < 5 - floor($average_rating); $i++): ?>
            <span class="empty">☆</span>
        <?php endfor; ?>
    <?php endif; ?>
    <span>(<?php echo $number_of_ratings; ?> ratings)</span>
</div>

    <?php foreach ($reviews as $review): ?>
    <div class="review-item cf">
        <div class="review-rating">
            <?php echo str_repeat('★', intval($review['rating'])); ?>
            <?php echo str_repeat('☆', 5 - intval($review['rating'])); ?>
        </div>
        <div class="review-name"><?php echo htmlspecialchars($review['name']); ?></div>
        <div class="review-text"><?php echo htmlspecialchars($review['review']); ?></div>
        <div class="review-time"><?php echo $review['time_ago']; ?></div>
    </div>
    <?php endforeach; ?>
</div>

<div>

</div>

<!-- Footer -->
<div class="boxx">
			<footer class="footer">
				<div class="container">
					<div class="row">

						<!-- Footer Column -->
						<div class="col-lg-3 footer_column">
							<div class="footer_col">
								<div class="footer_content footer_about">
									<div class="logo_container footer_logo">
										<div class="logo"><a href="/"><img src="../images/logo.png" alt="">travelsl</a>
										</div>
									</div>
									<p class="footer_about_text">Discover the enchantment of Sri Lanka, a jewel in the Indian Ocean, where ancient history, vibrant culture, and stunning landscapes converge.</p>
									<ul class="footer_social_list">
										<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a>
										</li>
										<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li class="footer_social_item"><a href="#"><i class="fa fa-instagram"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Column -->
						<div class="col-lg-3 footer_column">
							<div class="footer_col">
							</div>
						</div>

						<!-- Footer Column -->
						<div class="col-lg-3 footer_column">
							<div class="footer_col">
							</div>
						</div>

						<!-- Footer Column -->
						<div class="col-lg-3 footer_column">
							<div class="footer_col">
								<div class="footer_title">contact info</div>
								<div class="footer_content footer_contact">
									<ul class="contact_info_list">
										<li class="contact_info_item d-flex flex-row">
											<div>
												<div class="contact_info_icon"><img src="images/placeholder.svg" alt="">
												</div>
											</div>
											<div class="contact_info_text">4127 Raoul Wallenber 45b-c
												colombo
											</div>
										</li>
										<li class="contact_info_item d-flex flex-row">
											<div>
												<div class="contact_info_icon"><img src="images/phone-call.svg" alt="">
												</div>
											</div>
											<div class="contact_info_text">+94 75-95-45-5239</div>
										</li>
										<li class="contact_info_item d-flex flex-row">
											<div>
												<div class="contact_info_icon"><img src="images/message.svg" alt="">
												</div>
											</div>
											<div class="contact_info_text"><a
													href="mailto:contactme@gmail.com?Subject=Hello"
													target="_top">contact@travelsl.info</a></div>
										</li>
										<li class="contact_info_item d-flex flex-row">
											<div>
												<div class="contact_info_icon"><img src="images/planet-earth.svg"
														alt=""></div>
											</div>
											<div class="contact_info_text"><a href="/">www.Travelsl.info</a></div>
										</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</footer>

			<!-- Copyright -->

<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 order-lg-1 order-2  ">
				<div class="copyright_content d-flex flex-row align-items-center">
					<div>
Copyright &copy; All rights reserved by | Travelsl.info 
				</div>
				</div>
			</div>
			<div class="col-lg-9 order-lg-2 order-1">
				<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
					<div class="footer_nav">
						<ul class="footer_nav_list">
							<li class="footer_nav_item"><a href="/">home</a></li>
							<li class="footer_nav_item"><a href="../about.html">about us</a></li>
							  
							<li class="footer_nav_item"><a href="../contact.html">contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/about_custom.js"></script>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../js/custom.js"></script>
<script src="../styles-2/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../styles-2/custom.js"></script>





</body>

</html>

