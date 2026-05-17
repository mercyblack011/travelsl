<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sigiriya</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/place_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/place_responsive.css">
	<link rel="stylesheet" type="text/css" href="plugins-2/OwlCarousel2-2.3.4/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="styles-2/booking.css">
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
							<div class="phone">+45 345 3324 56789</div>
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
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
							</div>
							<div class="main_nav_container ml-auto">
								<ul class="main_nav_list">
									<li class="main_nav_item"><a href="index.php">home</a></li>
									<li class="main_nav_item"><a href="#">about us</a></li>
									<li class="main_nav_item"><a href="contact.html">contact us</a></li>
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
				<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
				<ul>
					<li class="main_nav_item"><a href="index.php">home</a></li>
					<li class="main_nav_item"><a href="#">about us</a></li>
					<li class="main_nav_item"><a href="contact.html">contact us</a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
			<?php
			// Establishing a connection to the database
			$servername = "localhost";  // Change this if your MySQL server is hosted elsewhere
			$username = "root";      // Replace with your MySQL username
			$password = "";      // Replace with your MySQL password
			$database = "truism"; // Replace with your database name
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $database);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// Query to select image_url from the place table
			$sql = "SELECT image_url FROM  place WHERE name = 'Sigiriya'"; // Change the WHERE condition as needed
			
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// Output data of each row
				while ($row = $result->fetch_assoc()) {
					// Outputting the image within the <div> element
					echo '<div class="home_background parallax-window" data-parallax="scroll" data-image-src="' . $row["image_url"] . '"></div>';
				}
			} else {
				echo "0 results";
			}

			// Close connection
			$conn->close();
			?>
			<div class="home_content">
				<div class="home_title">sigiriya</div>
			</div>
		</div>

	</div>


<!-- Intro -->


<div>
<div class="container">

<section class="content-1">

    <article class>
        <p>Sigiriya or Sinhagiri (Lion Rock Sinhala: සීගිරිය, Tamil: சிகிரியா/சிங்ககிரி, pronounced see-gi-ri-yə) is an ancient rock fortress located in the northern Matale District near the town of Dambulla in the Central Province, Sri Lanka. It is a site of historical and archaeological significance that is dominated by a massive column of granite approximately 180 m (590 ft) high.[2]</p>
        <p>Twee 8-bit Blue Bottle, wolf tattooed distillery retro dreamcatcher put a bird on it letterpress asymmetrical actually Austin crucifix cred. Selfies ethical butcher vegan, umami bitters literally wolf seitan +1 Intelligentsia Pitchfork. Godard mixtape pork belly Pitchfork, fap food truck wolf banh mi post-ironic. Narwhal letterpress Etsy direct trade irony pour-over. Cosby sweater literally Vice DIY butcher selvage shabby chic, XOXO hashtag letterpress single-origin coffee. Artisan Portland disrupt swag small batch chambray, Neutra bespoke Wes Anderson tofu VHS ennui. Cosby sweater letterpress 90's shabby chic cornhole, literally YOLO sartorial bitters Blue Bottle cardigan chambray asymmetrical.</p>
        <p>Fixie gluten-free sriracha flannel, selfies chambray direct trade. Authentic mixtape semiotics deep v jean shorts pork belly occupy shabby chic sriracha. Tousled Williamsburg fanny pack High Life shabby chic Cosby sweater, gastropub organic cornhole post-ironic hella drinking vinegar cliche wolf pork belly. Wolf selvage cornhole church-key, ethnic raw denim chillwave authentic asymmetrical Austin synth. Single-origin coffee iPhone Carles, Godard synth chia photo booth fap mustache authentic pickled direct trade. Literally Vice Echo Park, trust fund viral ennui you probably haven't heard of them cred biodiesel lomo scenester gastropub chia keffiyeh Intelligentsia. Blue Bottle blog asymmetrical, pickled XOXO sustainable twee seitan cornhole 90's.</p>
        <p>Flexitarian bitters cardigan tofu tattooed, Kickstarter Thundercats umami hella raw denim mumblecore stumptown Godard trust fund. Pop-up organic iPhone, Godard actually vegan fanny pack Intelligentsia sartorial. Chambray Echo Park you probably haven't heard of them, food truck Wes Anderson Brooklyn brunch. Scenester Austin street art, sartorial sriracha letterpress hashtag. Wayfarers vinyl single-origin coffee, fashion axe pork belly hoodie polaroid mumblecore street art Truffaut. Readymade ethical Carles American Apparel fanny pack twee. Normcore Etsy squid, farm-to-table XOXO forage selfies distillery photo booth Tonx.</p>      
        <p>Mlkshk flexitarian ethical, narwhal forage bespoke artisan hella plaid vinyl try-hard Tonx actually keytar. McSweeney's chambray forage next level, mixtape Austin Portland Odd Future ethical seitan. Gluten-free roof party locavore, pop-up cornhole chambray mlkshk bitters McSweeney's Kickstarter bespoke. YOLO cred pop-up chambray PBR&B. Kitsch mixtape DIY skateboard leggings, YOLO ennui chillwave dreamcatcher put a bird on it. Pug artisan PBR&B PBR dreamcatcher, Marfa Etsy mixtape mustache messenger bag Vice. Plaid lomo pour-over post-ironic, synth disrupt beard Truffaut church-key Tumblr narwhal Bushwick cred slow-carb tofu.</p>      
        <p>Pitchfork disrupt Vice fixie sriracha Blue Bottle. Carles gastropub skateboard Schlitz, Truffaut semiotics PBR fanny pack. Truffaut biodiesel aesthetic, skateboard Etsy distillery blog. Craft beer mumblecore bitters, Tonx fixie viral fingerstache Bushwick occupy. DIY tofu pug lo-fi, street art flexitarian Truffaut. 90's banjo lo-fi master cleanse selvage Tonx, narwhal tote bag. Helvetica before they sold out put a bird on it slow-carb normcore lo-fi.</p>
    </article>


	<div>

	<div id="map"></div>

    <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15, // Adjust zoom level as needed
                    center: {lat: 7.957364593489453, lng: 80.75973754340299}, // Center map on given coordinates
                    mapTypeId: google.maps.MapTypeId.SATELLITE, // Default to satellite view
                    streetViewControl: true, // Enable Street View Control
                    mapTypeControl: true, // Allow the user to change the map type
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                        position: google.maps.ControlPosition.TOP_LEFT
                    },
                    streetViewControlOptions: {
                        position: google.maps.ControlPosition.LEFT_TOP
                    }
                });

            // Add a marker at the specified coordinates
            var marker = new google.maps.Marker({
                position: {lat: 7.957364593489453, lng: 80.75973754340299},
                map: map,
                title: 'Location Name' // Tooltip text on hover over the marker
            });

            // Optionally, you can also specify the position of the Street View control.
            map.setOptions({
                streetViewControl: true,
                streetViewControlOptions: {
                    position: google.maps.ControlPosition.LEFT_TOP
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.6/mapsJavaScriptAPI.js"></script>

</section> 

</div>


<script src="https://use.fontawesome.com/a6f0361695.js"></script>





 <!-- all page  -->

	
<!-- Testimonials Hospitel  -->

<div class="testimonials" id="trends">
		<div class="test_border"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">Near Best Hospitals</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<!-- Testimonials Slider -->

					<div class="test_slider_container">
						<div class="owl-carousel owl-theme test_slider">

							<!-- Testimonial Item -->
							<a href="#">
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/image12.jpeg" alt=""></div>
									<div class="test_icon"><img src="images/hospital.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">Lanka Hospitals PLC</div>
												<div class="test_date"></div>
											</div>
											<div class="test_quote_title"></div>
											<p class="test_quote_text">Lanka Hospitals in Colombo, Sri Lanka, offers advanced medical technology, 350 beds, and top doctors in a lush setting.</p>
										</div>
									</div>
								</div>
							</div></a>

							<!-- Testimonial Item -->
							<a href="#">
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/image13.jpg" alt=""></div>
									<div class="test_icon"><img src="images/hospital.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">Lanka Hospital, Colombo</div>
												<div class="test_date"></div>
											</div>
											<div class="test_quote_title"></div>
											<p class="test_quote_text">Lanka Hospital; 350-bed, advanced tech, multi-specialty care, 11-storey with helipad, only in Sri Lanka with air-ambulance, set in 7-acre garden.</p>
										</div>
									</div>
								</div>
							</div></a>

							
							<!-- Testimonial Item -->
							<a href="#">
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/image14.jpg" alt=""></div>
									<div class="test_icon"><img src="images/hospital.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">Borella Ayurvedic Hospital</div>
												<div class="test_date"></div>
											</div>
											<div class="test_quote_title"></div>
											<p class="test_quote_text">In Sri Lanka, Dengue and Malaria are common; take precautions. For tourists, drowning and road accidents are major risks.</p>
										</div>
									</div>
								</div>
							</div></a>
			      </div>
		      </div>
        </div>	
			</div>
    </div>
	</div>
</div>

<!-- Booking -->

<div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2 class="section_title">Recommended Hotels And Book a room</h2></div>
					<div class="booking_text text-center">
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit.</p>
					</div>


					<!-- Booking Slider -->
					<div class="booking_slider_container">
						<div class="owl-carousel owl-theme booking_slider">
							
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_1.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<div class="booking_price">$120/Night</div>
								<div class="booking_link"><a href="booking.html">Family Room</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_2.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<div class="booking_price">$120/Night</div>
								<div class="booking_link"><a href="booking.html">Deluxe Room</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_3.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<div class="booking_price">$120/Night</div>
								<div class="booking_link"><a href="booking.html">Single Room</a></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
    <div class="test_border"></div>

  </div>



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
$username = 'root';
$password = '';
$dbname = 'truism';

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
        $stmt = $conn->prepare("INSERT INTO sigiriya (name, email, rating, review) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $name, $email, $rating, $review);

        if ($stmt->execute()) {
            // Close the database connection
            $stmt->close();
            // Redirect to index.php after successful submission
            echo '<script>window.location.href = "p1.php";</script>';
            exit(); // Ensure no further code execution after redirection
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }
    }
}
?>

<!-- Review Form -->

<form id="feedback" action="p1.php" method="post">
    <br>
    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input name="name" placeholder="Enter Your Name" class="form-control" type="text" style="height: 50px;">
                <?php if (!empty($nameError)) echo '<div style="color:red;">'.$nameError.'</div>'; ?>      
            </div>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input name="email" type="email" class="form-control" placeholder="Enter Your Email" style="height: 50px;">
                <?php if (!empty($emailError)) echo '<div style="color:red;">'.$emailError.'</div>'; ?>
            </div>
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-star"></i></span>
                <select class="form-control" name="rating"style="height: 50px;">
                    <option value="">Select a rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <?php if (!empty($ratingError)) echo '<div style="color:red;">'.$ratingError.'</div>'; ?>

            </div>
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <textarea class="form-control" name="review" rows="3"placeholder="Write Your Review " style="height: 100px;"></textarea>
                <?php if (!empty($reviewError)) echo '<div style="color:red;">'.$reviewError.'</div>'; ?>      </div>
        </div>
    </div>
    <br>

    <div class="form-group" style="text-align: center;">
        <button type="submit" class="btn btn-primary" style="display: block; margin-left: 20px; padding-top: 10px;">Submit</button>
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
$sqlRatings = "SELECT rating FROM sigiriya";
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
$sql = "SELECT name, rating, review, DATE_FORMAT(created_at, '%H:%i') as time_ago FROM sigiriya ORDER BY id DESC";
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
										<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelsl</a>
										</div>
									</div>
									<p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur
										adipiscing
										elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc
										et
										suscipit
										urna. Integer eleme ntum orci eu vehicula pretium.</p>
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
											<div class="contact_info_text">+94 75-93-91-149</div>
										</li>
										<li class="contact_info_item d-flex flex-row">
											<div>
												<div class="contact_info_icon"><img src="images/message.svg" alt="">
												</div>
											</div>
											<div class="contact_info_text"><a
													href="mailto:contactme@gmail.com?Subject=Hello"
													target="_top">Althafsm501@gmail.com</a></div>
										</li>
										<li class="contact_info_item d-flex flex-row">
											<div>
												<div class="contact_info_icon"><img src="images/planet-earth.svg"
														alt=""></div>
											</div>
											<div class="contact_info_text"><a href="">www.Travelsl.com</a></div>
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
Copyright &copy; All rights reserved | SMA.Althaf 
				</div>
				</div>
			</div>
			<div class="col-lg-9 order-lg-2 order-1">
				<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
					<div class="footer_nav">
						<ul class="footer_nav_list">
							<li class="footer_nav_item"><a href="index.html">home</a></li>
							<li class="footer_nav_item"><a href="about.html">about us</a></li>
							<li class="footer_nav_item"><a href="#">news</a></li>
							<li class="footer_nav_item"><a href="contact.html">contact</a></li>
						</ul>
					</div>
				</div>
			</div>
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