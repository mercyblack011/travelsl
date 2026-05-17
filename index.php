<!DOCTYPE html>
<html lang="en">

<head>
	<title>Travelsl: Explore Sri Lanka Top Places to Visit</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Discover the best places to visit in Sri Lanka with our essential TravelSL guide. Start your adventure now!">
   <meta name="keywords" content="Sri Lanka, Travelsl, Sri Lanka Tourism, Best places in Sri Lanka, Sri Lanka Best Places To Visit, Sri Lanka beaches, Sri Lanka tourism, Sri Lanka adventure travel, travel, travel guide, Sri Lanka, travel recommendation, travel recommendation for Sri Lanka, best place in Sri Lanka, TravelSL.info">
	<link rel="icon" href="images/logo-meta.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VE6ZQVK3NG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VE6ZQVK3NG');
</script>



</head>

<body>

	<style>


		/* ── TRAVELSL ABOUT PAGE — BRAND STYLES ── */
		:root {
			--orange: #FF9500;
			--purple: #7B2FBE;
			--dark:   #1a1a2e;
			--grad:   linear-gradient(90deg, #FF9500, #7B2FBE);
		}

		/* ── INTRO SECTION ── */
		.intro { padding: 80px 0 60px; background: #fff; }
		.intro_title {
			font-family: 'Playfair Display', serif !important;
			font-size: 32px !important;
			font-weight: 900 !important;
			color: #1a1a1a !important;
			line-height: 1.2;
			margin-bottom: 20px;
			margin-top: 10px;
		}
		.intro_title::after {
			content: '';
			display: block;
			width: 60px; height: 3px;
			background: var(--orange);
			margin-top: 14px;
		}
		.intro_text p {
			font-family: 'Montserrat', sans-serif;
			font-size: 14px; color: #555; line-height: 1.85;
			text-align: justify;
		}
		.intro_image img {
			border-radius: 12px;
			box-shadow: 0 12px 40px rgba(0,0,0,0.12);
		}
		.button.intro_button { margin-bottom: 24px; margin-top: 10px; }
		.button.intro_button a {
			display: inline-block;
			background: var(--orange);
			color: #fff !important;
			font-family: 'Montserrat', sans-serif;
			font-size: 11px; font-weight: 700;
			letter-spacing: 2px; text-transform: uppercase;
			padding: 3px 32px; border-radius: 20px;
			text-decoration: none; transition: background 0.3s;
		}
		.button.intro_button a:hover { background: var(--purple); }

		/* ── MILESTONES ── */
		.milestones {
			background: linear-gradient(135deg, #1a1a2e 0%, #2d1b5e 100%);
			padding: 70px 40px; margin: 60px 0;
		}
		.elements_title {
			font-family: 'Montserrat', sans-serif !important;
			font-size: 26px !important; font-weight: 800 !important;
			letter-spacing: 3px !important;
			color: #fff !important; text-align: center !important;
			margin-bottom: 50px !important; position: relative;
		}
		.elements_title::after {
			content: '';
			display: block; width: 60px; height: 3px;
			background: var(--orange); margin: 14px auto 0;
		}
		.milestone { padding: 30px 20px; }
		.milestone_icon img {
			width: 56px; height: 56px; margin-bottom: 16px;
			filter: brightness(0) invert(1); opacity: 0.9;
		}
		.milestone_counter {
			font-family: 'Playfair Display', serif !important;
			font-size: 52px !important; font-weight: 900 !important;
			color: var(--orange) !important; line-height: 1; margin-bottom: 8px;
		}
		.milestone_text {
			font-family: 'Montserrat', sans-serif !important;
			font-size: 12px !important; font-weight: 600 !important;
			letter-spacing: 1.5px !important; text-transform: uppercase !important;
			color: rgba(255,255,255,0.7) !important;
		}
		.col-lg-3 { margin-top: 0 !important; }

		/* ── SLIDER SECTION HEADING ── */
		.slider-section { padding: 80px 0 0; background: #f8f7f4; }
		.slider-section-header {
			text-align: center; padding-bottom: 40px;
		}
		.slider-section-header h2 {
			font-family: 'Montserrat', sans-serif;
			font-size: 26px; font-weight: 800;
			letter-spacing: 3px; text-transform: uppercase;
			color: #1a1a1a; margin-bottom: 10px;
		}
		.slider-section-header p {
			color: #666; font-size: 13px;
		}
		.slider-underline {
			width: 60px; height: 3px;
			background: var(--orange);
			margin: 12px auto 0; border-radius: 2px;
		}

		/* ── SLIDER ── */
		.slider {
			position: relative;
			width: 90%;
			overflow: hidden;
			margin: 0 auto 80px;
			border-radius: 16px;
			box-shadow: 0 20px 60px rgba(0,0,0,0.2);
		}
		.slides { display: flex; transition: transform 0.5s ease-in-out; }
		.slide { min-width: 100%; box-sizing: border-box; position: relative; }
		.slide img { width: 100%; height: 520px; object-fit: cover; display: block; }

		/* Caption — orange-purple gradient bar style */
		.caption {
			position: absolute; bottom: 0; left: 0; right: 0;
			background: linear-gradient(to top, rgba(0,0,0,0.82), rgba(0,0,0,0));
			padding: 60px 40px 30px;
			width: 100%;
		}
		.caption::before {
			content: '';
			position: absolute; top: 0; left: 40px;
			width: 50px; height: 3px;
			background: var(--orange);
		}
		.caption-h {
			font-family: 'Playfair Display', serif;
			font-size: 26px; font-weight: 900;
			color: #fff; margin-bottom: 8px;
		}
		.captext { color: rgba(255,255,255,0.8); font-size: 13px; line-height: 1.6; }

		/* Dots */
		.dots {
			position: absolute; bottom: 20px; right: 40px;
			display: flex; gap: 8px;
		}
		.dot {
			width: 8px; height: 8px;
			background: rgba(255,255,255,0.4);
			border-radius: 50%; cursor: pointer;
			transition: all 0.3s;
		}
		.dot.active { background: var(--orange); transform: scale(1.3); }
		.dot:hover  { background: rgba(255,255,255,0.8); }

		/* Slider nav arrows */
		.cta_slider_nav {
			position: absolute; top: 50%; transform: translateY(-50%);
			width: 44px; height: 44px;
			background: rgba(255,255,255,0.15);
			border-radius: 50%;
			display: flex; align-items: center; justify-content: center;
			cursor: pointer; z-index: 10;
			transition: background 0.3s;
		}
		.cta_slider_nav:hover { background: var(--orange); }
		.cta_slider_prev { left: 20px; }
		.cta_slider_next { right: 20px; }
		.cta_slider_nav svg { width: 24px; height: 24px; margin-top: 0; }
		.nav_path { fill: rgba(255,255,255,0.9); }
		.nav_arrow { fill: rgba(255,255,255,0.9); }
		.cta_slider_nav:hover .nav_path,
		.cta_slider_nav:hover .nav_arrow { fill: #fff; }

		/* Mobile */
		@media (max-width: 768px) {
			.slide img { height: 220px; }
			.caption { padding: 40px 20px 20px; }
			.caption-h { font-size: 16px; }
			.captext { font-size: 11px; }
			.dots { right: 20px; bottom: 14px; }
		}
	
		/* Basic styling for the slider */
		.slider {
			position: relative;
			width: 90%;
			overflow: hidden;
			margin: 0 auto;
			/* Center the slider horizontally */
			border-radius: 4px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Horizontal offset, vertical offset, blur radius, color */
		}
.contact_info_item
{
	margin-bottom: 22px;
	background: rgba(255,255,255,0.05) !important;
			border-radius: 8px !important;
			padding: 12px 14px !important;
			display: flex !important;
			align-items: center !important;
			gap: 12px !important;
			margin-bottom: 10px !important;
			font-size: 12px !important;
	
}
.footer_about_text
{

	font-size: 12px;}
		/* Slide container */
		.slides {
			display: flex;
			transition: transform 0.5s ease-in-out;
		}

		/* Individual slide */
		.slide {
			min-width: 100%;
			box-sizing: border-box;
			position: relative;
		}

		/* Image in each slide */
		.slide img {
			width: 100%;
			height: auto;
		}

		/* Caption within each slide */
		.caption {
			position: absolute;
			bottom: 30px;
			left: 20px;
			color: #fff;
			background: rgb(42 0 68 / 50%);
			padding: 10px;
			border-radius: 5px;
			width: 655px;
			font-size: 16px;
		}

		.caption-h{
			font-size: 29px;
			font-weight: bold;
		}

		.captext{
			color: #fff;
		}

		/* Dots navigation */
		.dots {
			position: absolute;
			bottom: 10px;
			left: 50%;
			transform: translateX(-50%);
			display: flex;
			gap: 10px;
			/* Spacing between dots */
		}

		/* Individual dot */
		.dot {
			width: 12px;
			height: 12px;
			background: rgba(255, 255, 255, 0.5);
			border-radius: 50%;
			cursor: pointer;
			transition: background 0.3s;
		}

		/* Highlight active dot */
		.dot.active {
			background: rgba(255, 255, 255, 1);
		}

		/* Change color on hover */
		.dot:hover {
			background: rgba(255, 255, 255, 0.8);
		}
		
/* Media Query for Mobile Devices */
@media screen and (max-width: 768px) {
    .caption {
        bottom: 16px; /* Adjusted for mobile */
        left: 10px; /* Adjusted for mobile */
        font-size: 14px; /* Adjusted font size for mobile */
        max-width: 250px; /* Adjust max-width as needed for mobile */
    }

    .dots {
        bottom: 5px; /* Adjusted for mobile */
    }
	.slide img {
			width: 100%;
			height: 150px;
		}
		.caption-h{
			font-size: 10px;
			font-weight: bold;
		}

		.captext{
			color: #fff;
			font-size: 6px;

		}
		.dot {
			width: 6px;
			height: 6px;
			background: rgba(255, 255, 255, 0.5);
			border-radius: 50%;
			cursor: pointer;
			transition: background 0.3s;
		}
}

	</style>

	
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
								<div class="logo"><a href="/"><img src="images/logo.png" alt="travelsl">travelsl</a></div>
							</div>
							<div class="main_nav_container ml-auto">
								<ul class="main_nav_list">
									<li class="main_nav_item"><a href="/">home</a></li>
									<li class="main_nav_item"><a href="about.html">about us</a></li>
									<li class="main_nav_item"><a href="contact.html">contact</a></li>
									<li class="main_nav_item"><a href="#calculate-trip-cost">Trip Cost Calculate</a>
									</li>

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
				<div class="logo menu_logo"><a href="/"><img src="images/logo.png" alt="travelsl"></a></div>
				<ul>
					<li class="menu_item"><a href="/">home</a></li>
					<li class="menu_item"><a href="about.html">about us</a></li>
					<li class="menu_item"><a href="contact.html">contact us</a></li>
					<li class="menu_item"><a href="#calculate-trip-cost">Trip Cost Calculate</a></li>
				</ul>
			</div>
		</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
<div class="home_slider_background" style="background-image:url(images/home1.webp)" role="img" aria-label="Travelsl: Explore Sri Lanka Top Places to Visit"></div>
					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>sri lanka</h1>

						</div>
					</div>
				</div>

			

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
<div class="home_slider_background" style="background-image:url(images/home1.webp)" role="img" aria-label="Travelsl: Explore Sri Lanka Top Places to Visit"></div>
					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>Sri lanka</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="allplaces.php">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			
			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
				</ul>
			</div>
			
		</div>

	</div>

		<!-- Search -->

		<div class="search">


			<!-- Search Contents -->

			<div class="container fill_height">
				<div class="row fill_height">
					<div class="col fill_height">

						<!-- Search Tabs -->

						<div class="search_tabs_container">
							<div
								class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div
									class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
									<img src="images/suitcase.png" alt=""><span>Search By PROVINCE</span>
								</div>
								<div
									class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
									<img src="images/bus.png" alt="">Search By INTEREST
								</div>
							</div>
						</div>

						<!-- Search Panel -->
						<div class="search_panel active">
							<form action="search1.php" method="post" id="search_form_1"
								class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div class="search_item">
									<div>Destination Province</div>
									<!-- Select dropdown for province selection -->
									<select name="province" id="children_2" class="dropdown_item_select search_input">
										<!-- Disabled and selected option as prompt -->
										<option value="" disabled selected>Select</option>
										<option value="Northern Province">Northern Province</option>
										<option value="Western Province">Western Province</option>
										<option value="Central Province">Central Province</option>
										<option value="Southern Province">Southern Province</option>
										<option value="Eastern Province">Eastern Province</option>
										<option value="Uva Province">Uva Province</option>
										<option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
										<option value="North Central Province">North Central Province</option>
										<option value="North Western Province">North Western Province</option>
										<!-- Add other countries as needed -->
									</select>
								</div>
								<input type="submit" class="button search_button" value="search">
							</form>
						</div>

						<!-- Search Panel -->
						<div class="search_panel">
							<form action="search2.php" method="post" id="search_form_2"
								class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div class="search_item">
									<div>Province</div>
									<select name="province" id="province" class="dropdown_item_select search_input"
										onchange="updateCategories()">
										<option>Western Province</option>
										<option>Central Province</option>
										<option>Southern Province</option>
										<option>Northern Province</option>
										<option>Eastern Province</option>
										<option>North Western Province</option>
										<option>North Central Province</option>
										<option>Uva Province</option>
										<option>Sabaragamuwa Province</option>
									</select>
								</div>

								<div class="search_item">
									<div>Category</div>
									<select name="category" id="category" class="dropdown_item_select search_input">
										<!-- Categories will be dynamically populated based on province selection -->
									</select>
									<div class="error" style="color:red;" id="error_category"></div>
								</div>

								<div class="search_item">
									<div>Activity</div>
									<select name="activity" id="activity" class="dropdown_item_select search_input">
										<!-- Activities will be dynamically populated based on category selection -->
									</select>
									<div class="error" id="error_activity"></div>
								</div>

								<input type="submit" class="button search_button" value="search"
									onclick="return validateForm()">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			function updateCategories() {
				var province = document.getElementById('province').value;
				var categorySelect = document.getElementById('category');
				var categories = [];

				// Clear existing options
				categorySelect.innerHTML = '';

				// Define categories based on province
				if (province === 'Western Province') {
					categories = ['Monuments', 'Beaches', 'Cultural and Sports Events', 'National Parks'];
				} else if (province === 'Central Province') {
					categories = ['Monuments', 'National Parks', 'Cultural and Sports Events'];
				} else if (province === 'Southern Province') {
					categories = ['National Parks', 'Beaches', 'Monuments'];
				} else if (province === 'Uva Province') {
					categories = ['National Parks', 'Monuments', 'Water Fall'];
				} else if (province === 'Eastern Province') {
					categories = ['Monuments', 'Beaches', 'National Parks', 'Water Fall'];
				} else if (province === 'North Western Province') {
					categories = ['Beaches', 'Monuments'];
				} else if (province === 'North Central Province') {
					categories = ['National Parks', 'Monuments'];
				} else if (province === 'Northern Province') {
					categories = ['Beaches', 'Monuments'];
				} else if (province === 'Sabaragamuwa Province') {
					categories = ['Water Fall', 'Monuments', 'National Parks'];
				}

				// Populate category dropdown with relevant options
				for (var i = 0; i < categories.length; i++) {
					var option = document.createElement('option');
					option.value = categories[i];
					option.text = categories[i];
					categorySelect.appendChild(option);
				}

				// Update activities based on selected category
				updateActivities();
			}

			function updateActivities() {
				var category = document.getElementById('category').value;
				var activitySelect = document.getElementById('activity');
				var activities = [];

				// Clear existing options
				activitySelect.innerHTML = '';

				// Define activities based on selected category and province
				if (document.getElementById('province').value === 'Western Province') {
					if (category === 'Monuments') {
						activities = ['Sightseeing'];
					} else if (category === 'Beaches') {
						activities = ['Water Sports',];
					} else if (category === 'National Parks') {
						activities = ['Sightseeing'];
					} else if (category === 'Cultural and Sports Events') {
						activities = ['Cultural Exploration'];
					}
				} else if (document.getElementById('province').value === 'Central Province') {
					if (category === 'Monuments') {
						activities = ['Sightseeing'];
					} else if (category === 'National Parks') {
						activities = ['Wildlife Watching'];
					} else if (category === 'Cultural and Sports Events') {
						activities = ['Cultural Exploration'];
					}
				} else if (document.getElementById('province').value === 'Southern Province') {
					if (category === 'National Parks') {
						activities = ['Wildlife Watching'];
					} else if (category === 'Monuments') {
						activities = ['Sightseeing'];
					} else if (category === 'Beaches') {
						activities = ['Water Sports'];
					}
				} else if (document.getElementById('province').value === 'Northern Province') {
					if (category === 'Monuments') {
						activities = ['Sightseeing'];
					} else if (category === 'Beaches') {
						activities = ['Water Sports'];
					}
				} else if (document.getElementById('province').value === 'Eastern Province') {
					if (category === 'Monuments') {
						activities = ['Sightseeing'];
					} else if (category === 'Beaches') {
						activities = ['Water Sports'];
					} else if (category === 'National Parks') {
						activities = ['Wildlife Watching'];
					} else if (category === 'Water Fall') {
						activities = ['Nature Avengers'];
					}
				} else if (document.getElementById('province').value === 'North Western Province') {
					if (category === 'Beaches') {
						activities = ['Water Sports'];
					} else if (category === 'Monuments') {
						activities = ['Sightseeing'];
					}
				} else if (document.getElementById('province').value === 'North Central Province') {
					if (category === 'National Parks') {
						activities = ['Wildlife Watching'];
					} else if (category === 'Monuments') {
						activities = ['Sightseeing'];
					}
				} else if (document.getElementById('province').value === 'Uva Province') {
					if (category === 'National Parks') {
						activities = ['Nature Avengers'];
					} else if (category === 'Monuments') {
						activities = ['Sightseeing'];
					} else if (category === 'Water Fall') {
						activities = ['Nature Avengers'];
					}
				} else if (document.getElementById('province').value === 'Sabaragamuwa Province') {
					if (category === 'Water Fall') {
						activities = ['Sightseeing'];
					} else if (category === 'Monuments') {
						activities = ['Sightseeing'];
					} else if (category === 'National Parks') {
						activities = ['Wildlife Watching'];
					}
				}
				// Populate dropdown with relevant options
				for (var i = 0; i < activities.length; i++) {
					var option = document.createElement('option');
					option.value = activities[i];
					option.text = activities[i];
					activitySelect.appendChild(option);
				}
			}

			// Initialize the category dropdown on page load
			document.addEventListener('DOMContentLoaded', function () {
				updateCategories();
			});

			// Call updateActivities when category changes
			document.getElementById('category').addEventListener('change', updateActivities);

			function validateForm() {
				var isValid = true;
				var category = document.getElementById('category').value;
				var activity = document.getElementById('activity').value;

				// Reset error messages 
				document.getElementById('error_category').innerHTML = '';
				document.getElementById('error_activity').innerHTML = '';

				if (category == '') {
					document.getElementById('error_category').innerHTML = 'Please select a category.';
					isValid = false;
				}
				if (activity == '') {
					document.getElementById('error_activity').innerHTML = 'Please select an activity.';
					isValid = false;
				}

				return isValid;
			}
		</script>




		<!-- Testimonials -->

		<div class="testimonials" id="trends">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title-1">Trending Places in sri lanka</h2>
					</div>
				</div>
				<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Discover Sri Lanka's diverse highlights vibrant cities, historic sites, and picturesque coastlines. Immerse yourself in rich culture and natural beauty.</p>
					</div>
				</div>
			</div>
				<div class="row">
					<div class="col">

						<!-- Testimonials Slider -->

						<div class="test_slider_container">
							<div class="owl-carousel owl-theme test_slider">

								<!-- Testimonial Item -->
								<a href="place/narangala.php">
									<div class="owl-item">
										<div class="test_item">
											<div class="test_image"><img src="images/narangala.webp" alt=""></div>
											<div class="test_icon"><img src="images/backpack.png" alt=""></div>
											<div class="test_content_container">
												<div class="test_content">
													<div class="test_item_info">
														<div class="test_name">NARANGALA</div>
														<div class="test_date"></div>
													</div>
													<div class="test_quote_title"></div>
													<p class="test_quote_text">Aerial view on Nuwara
														Eliya, Gregory lake
														and clouds
														over - Sri Lanka</p>
												</div>
											</div>
										</div>
									</div>
								</a>
								<!-- Testimonial Item -->
								<a href="place/mirissa-beach.php">
									<div class="owl-item">
										<div class="test_item">
											<div class="test_image"><img src="images/Mirissa Beach.jpg" alt="#"></div>
											<div class="test_icon"><img src="images/island_t.png" alt=""></div>
											<div class="test_content_container">
												<div class="test_content">
													<div class="test_item_info">
														<div class="test_name">Mirissa Beach</div>
														<div class="test_date"></div>
													</div>
													<div class="test_quote_title"></div>
													<p class="test_quote_text">A beautiful stretch of
														beach with some
														quite strong waves.. </p>
												</div>
											</div>
										</div>
									</div>
								</a>


								<!-- Testimonial Item -->
								<a href="place/bopath-ella-falls.php">
									<div class="owl-item">
										<div class="test_item">
											<div class="test_image"><img src="images/Bopath_Ella_Falls.webp" alt="#"></div>
											<div class="test_icon"><img src="images/kayak.png" alt="">
											</div>
											<div class="test_content_container">
												<div class="test_content">
													<div class="test_item_info">
														<div class="test_name">Bopath Ella Falls</div>
														<div class="test_date"></div>
													</div>
													<div class="test_quote_title"></div>
													<p class="test_quote_text">Bopath Ella Falls is a stunning waterfall located in the Sabaragamuwa Province of Sri Lanka.</p>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="button intro_button">
			<div class="button_bcg"></div><a href="all-places.php">explore
				all places<span></span><span></span><span></span></a>
		</div>

	</div>

	<!-- calculate -->
	<h2 class="section_title" id="calculate-trip-cost">Calculate Your Trip Cost</h2>


 <div class="container-form">
    <form id="budgetForm" method="post">
        <div class="form-group">
            <label for="homeDistrict">Your District:</label>
            <select id="homeDistrict" name="home_district" required>
                <option value="" disabled selected>Select</option>
                <!-- Options will be added dynamically -->
            </select>
        </div>

        <div class="form-group">
            <label for="destinationDistrict">Destination District:</label>
            <select id="destinationDistrict" name="destination_district" required>
                <option value="" disabled selected>Select</option>
                <!-- Options will be added dynamically -->
            </select>
        </div>

        <div class="form-group">
            <label for="days">Number of Days:</label>
            <input type="number" id="days" name="days" placeholder="Enter" required min="1">
        </div>

        <div class="form-group">
            <label for="hotelType">Hotel Type:</label>
            <select id="hotelType" name="hotel_type" required>
                <option value="" disabled selected>Select</option>
                <option value="Budget">Budget</option>
                <option value="Mid-range">Mid-range</option>
                <option value="Luxury">Luxury</option>
            </select>
        </div>

        <div class="form-group">
            <label for="numPersons">Number of Persons:</label>
            <input type="number" id="numPersons" name="num_persons" placeholder="Enter" required min="1">
        </div>

        <div class="but-are">
			<div class="button button_line_1 trans_200" type="button" id="calculateButton" ><a href="#" class="trans_200">Calculate</a></div>

        </div>
    </form>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="result" class="section-result"></div>
        </div>
    </div>
</div>

	<script>
	document.addEventListener("DOMContentLoaded", function () {
    var districts = ["Ampara", "Anuradhapura", "Badulla", "Batticaloa", "Colombo", "Galle", "Gampaha", "Hambantota", "Jaffna", "Kalutara", "Kandy", "Kegalle", "Kilinochchi", "Kurunegala", "Mannar", "Matale", "Matara", "Monaragala", "Mullaitivu", "Nuwara Eliya", "Polonnaruwa", "Puttalam", "Ratnapura", "Trincomalee", "Vavuniya"];

    var homeDistrictSelect = document.getElementById("homeDistrict");
    var destinationDistrictSelect = document.getElementById("destinationDistrict");

    // Add options for districts dynamically
    districts.forEach(function (district) {
        var option = new Option(district, district);
        homeDistrictSelect.add(option);

        option = new Option(district, district);
        destinationDistrictSelect.add(option);
    });

    // AJAX request to calculate budget without page reload
    document.getElementById("calculateButton").addEventListener("click", function () {
        var form = document.getElementById("budgetForm");
        if (form.checkValidity()) {
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById("result").innerHTML = xhr.responseText;
                    } else {
                        document.getElementById("result").innerHTML = "Error occurred. Please try again.";
                    }
                }
            };

            xhr.open("POST", "calculate_budget.php", true);
            xhr.send(formData);
        } else {
            form.reportValidity();
        }
    });
});

	</script>



	<script>

		document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("myModal");
    var span = document.querySelector(".close");

    // Event listener for the Calculate button
    document.getElementById("calculateButton").addEventListener("click", function () {
        var form = document.getElementById("budgetForm");

        // Check if the form is valid using HTML5 validation
        if (form.checkValidity()) {
            var formData = new FormData(form);

            // AJAX request to calculate budget
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Display result in modal on success
                        openModal(xhr.responseText);
                        // Clear form fields
                        form.reset();
                    } else {
                        // Display error message in modal on failure
                        openModal("Error occurred. Please try again.");
                    }
                }
            };

            xhr.open("POST", "calculate_budget.php", true);
            xhr.send(formData);
        } else {
            // Trigger HTML5 validation messages
            form.reportValidity();
        }
    });

    // Function to open modal and display content
    function openModal(content) {
        var modalContent = document.querySelector(".modal-content");
        modalContent.innerHTML = ""; // Clear existing content

        // Create close icon element
        var closeIcon = document.createElement("i");
        closeIcon.classList.add("fas", "fa-times", "close-icon");
        closeIcon.addEventListener("click", function () {
            modal.style.display = "none"; // Hide the modal when close icon is clicked
        });

        // Create success icon element
        var successIcon = document.createElement("i");
        successIcon.classList.add("far", "fa-smile-beam", "fa-thin", "success-icon");

        // Create result text element with the section-result class
        var resultText = document.createElement("div");
        resultText.textContent = content;
        resultText.classList.add("section-result"); // Add the section-result class

        // Append close icon, success icon, and result text to modal content
        modalContent.appendChild(closeIcon);
        modalContent.appendChild(successIcon);
        modalContent.appendChild(resultText);

        // Display the modal
        modal.style.display = "block";
    }

    // Close modal when clicking on close button
    span.onclick = function () {
        modal.style.display = "none";
    };

    // Close modal when clicking outside the modal content
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});

	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			// Listen for clicks on the document
			document.querySelectorAll('a[href^="#"]').forEach(anchor => {
				anchor.addEventListener('click', function (e) {
					e.preventDefault(); // Prevent default anchor click behavior

					// Find the target element
					var target = document.querySelector(this.getAttribute('href'));
					if (target) {
						// Scroll to the target element smoothly
						target.scrollIntoView({
							behavior: 'smooth',
							block: 'start' // Aligns to the top
						});
					}
				});
			});
		});
	</script>

	<!-- Elements -->

	<div class="elements">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Progress Bars and Accordions -->

					<div class="pbars_accordions">
						<div class="row">
							<div class="col-lg-12">
								<div class="elements_title">EXPLORE STATUS & QUIZZES</div>
							</div>
						</div>

						<div class="row pbars_accordions_container">

							<!-- Progress Bars & Accordions -->

							<div class="col-lg-7">

								<!-- Progress Bars -->
								<div class="elements_progress_bars">

									<div class="pbar_container">
										<ul class="progress_bar_container col_12 clearfix">
											<li class="pb_item clearfix">
												<div class="pb_item_title">
													<h4>Monuments</h4>
												</div>
												<div class="pb_item_content">
													<div id="skill_1_pbar" class="skill_bars" data-perc="0.72"
														data-color="#31124b"></div>
												</div>
											</li>
											<li class="pb_item clearfix">
												<div class="pb_item_title">
													<h4>Beaches</h4>
												</div>
												<div class="pb_item_content">
													<div id="skill_2_pbar" class="skill_bars" data-perc="0.89"
														data-color="#a95ce4"></div>
												</div>
											</li>
											<li class="pb_item clearfix">
												<div class="pb_item_title">
													<h4>National Parks</h4>
												</div>
												<div class="pb_item_content">
													<div id="skill_3_pbar" class="skill_bars" data-perc="0.32"
														data-color="#fa6f1b"></div>
												</div>
											</li>
											<li class="pb_item clearfix">
												<div class="pb_item_title">
													<h4>Water Fall</h4>
												</div>
												<div class="pb_item_content">
													<div id="skill_4_pbar" class="skill_bars" data-perc="0.55"
														data-color="#fa9e1b"></div>
												</div>
											</li>
										</ul>
									</div>

								</div>
							</div>

							<div class="col-lg-5">

								<!-- Accordions -->
								<div class="elements_accordions">

									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center active">
											<div> What are some must visit destinations in Sri Lanka?</div>
										</div>
										<div class="accordion_panel">
											<p> Sri Lanka boasts a myriad of stunning destinations. From the ancient
												city of Anuradhapura to the scenic hill country of Ella and the pristine
												beaches of Mirissa, there's something for every traveler's taste.</p>
										</div>
									</div>

									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center">
											<div>Is it safe to travel to Sri Lanka?</div>
										</div>
										<div class="accordion_panel">
											<p>Yes, Sri Lanka is generally safe for tourists. However, it's always
												advisable to stay informed about current events and to exercise common
												sense precautions while traveling, such as avoiding isolated areas at
												night.</p>
										</div>
									</div>

									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center">
											<div>What are the best times of year to visit Sri Lanka?</div>
										</div>
										<div class="accordion_panel">
											<p>The best time to visit Sri Lanka is generally from December to March when
												the weather is dry and sunny, especially on the west and south coasts.
												However, the hill country is best visited from April to September to
												avoid monsoon rains.</p>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
         </div>
	 </div>

					<!-- CTA -->
	<div class="col-lg-12">
								<div class="elements_title">BEST HOTEL IN SRI LANKA</div>
							</div>
<br>
<br>
<br>

	
	<div class="cta">
		<!-- Image by https://unsplash.com/@thanni -->
<div class="cta_background" style="background-image:url(images/hotel.jpg)" alt="Best Hotel In Sri Lanka"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- CTA Slider -->

					<div class="cta_slider_container">
						<div class="owl-carousel owl-theme cta_slider">

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title">Cinnamon Grand Colombo</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Experience luxury at Cinnamon Grand Colombo, centrally located in Sri Lanka's capital. Enjoy spacious rooms with city or ocean views, diverse dining options, and a state-of-the-art spa. Ideal for both business and leisure travelers seeking modern comforts and traditional hospitality in the heart of Colombo.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="https://rb.gy/3yicp2" target="_blank">Chack Out<span></span><span></span><span></span></a></div>
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title">Mahaweli Reach Hotel</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Nestled on the banks of the Mahaweli River, Mahaweli Reach Hotel offers a serene retreat in Kandy, Sri Lanka. Enjoy elegantly appointed rooms, river or garden views, and a range of dining options. With its tranquil setting and impeccable service, it's the perfect choice for relaxation and exploration.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="https://rb.gy/t1kgcs" target="_blank">Check out<span></span><span></span><span></span></a></div>
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title">Anantara Peace Haven Tangalle</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Escape to serenity at Anantara Peace Haven Tangalle Resort, set amidst lush gardens on Sri Lanka's southern coast. Enjoy luxurious rooms with ocean or garden views, exceptional dining experiences, and a world-class spa. Perfect for a peaceful getaway, offering a blend of natural beauty and luxurious comforts.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="https://rb.gy/apv2so" target="_blank">check out<span></span><span></span><span></span></a></div>
							</div>
							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title">Galle Face Hotel</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Step into colonial elegance at Galle Face Hotel, a historic landmark on Colombo's oceanfront. Offering timeless luxury with stunning sea views, refined rooms, and exquisite dining options, this iconic hotel combines rich heritage with modern comforts. Ideal for travelers seeking a blend of tradition and contemporary sophistication.

</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="https://rb.gy/gb8wah" target="_blank">Check out<span></span><span></span><span></span></a></div>
							</div>
							
						</div>

						<!-- CTA Slider Nav - Prev -->
						<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- CTA Slider Nav - Next -->
						<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
					
	</div>

	<!-- Offers -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">best places to visit in sri lanka</h2>
				</div>
			</div>
			<div class="row offers_items">

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(images/place-1.webp)" alt="Sigiriya"></div>
									<div class="offer_name"><a href="place/sigiriya.php">sigiriya</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">SIGIRIYA <span></span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Sigiriya, an iconic ancient marvel in Sri Lanka, boasts a dramatic rock formation crowned with a palace complex, surrounded by lush gardens and adorned with intricate frescoes, and artistic achievements.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="place/sigiriya.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by Egzon Bytyqi -->
									<div class="offers_image_background" style="background-image:url(images/place-2.webp)" alt="Lotus Tower"></div>
									<div class="offer_name"><a href="place/lotus-tower.php">Lotus Tower</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">LOTUS TOWER<span></span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Lotus Tower, Colombo's iconic landmark, rises 350 meters high. Its lotus flower design symbolizes purity and growth, serving as a offering breathtaking panoramic views of the city.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="place/lotus-tower.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@nevenkrcmarek -->
									<div class="offers_image_background" style="background-image:url(images/place-3.webp)" alt="Nine Arch Bridge"></div>
									<div class="offer_name"><a href="place/nine-arch-bridge.php">nine arch bridge</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">NINE ARCH BRIDGE<span></span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">The Nine Arch Bridge in Ella, Sri Lanka, is a picturesque railway viaduct renowned for its nine majestic arches. Surrounded by lush greenery and tea plantations, it's a prime spot for stunning views and leisurely walks.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="place/nine-arch-bridge.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@mantashesthaven -->
									<div class="offers_image_background" style="background-image:url(images/place-4.webp)" alt="Mirissa Beach"></div>
									<div class="offer_name"><a href="place/mirissa-beach.php">mirissa beach</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">MIRISSA BEACH<span></span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Mirissa Beach in Sri Lanka is a serene coastal gem, offering soft golden sands, and turquoise waters. It's an ideal destination for swimming, sunbathing, and enjoying breathtaking sunsets over the Indian Ocean.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="place/mirissa-beach.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		
		</div>
	</div>
	
	<div class="elements">
		<div class="container">
			<div class="row">
				<div class="col">
					
	
	<!-- Icon Boxes -->

					<div class="icon_boxes">
						<div class="row">
							<div class="col">
								<div class="elements_title">SRI LANKA BEST PART</div>
							</div>
						</div>

						<div class="row icon_boxes_container">

							<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
								<div class="icon_container d-flex flex-column justify-content-end">
									<div><img src="images/guide.png" alt=""></div>
								</div>
								<h3>Local Guides</h3>
								<p>Explore with expert local guides who offer personalized tours to enhance your Sri Lanka experience.</p>
							</div>

							<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
								<div class="icon_container d-flex flex-column justify-content-end">
									<div><img src="images/bed.png" alt=""></div>
								</div>
								<h3>Accommodation</h3>
								<p>Find the best places to stay, from luxury hotels to budget-friendly accommodations.</p>
							</div>

							<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
								<div class="icon_container d-flex flex-column justify-content-end">
									<div><img src="images/culture.png" alt=""></div>
								</div>
								<h3>Cultural Experiences</h3>
								<p>Immerse yourself in the local culture with traditional performances, festivals, and cuisine.</p>
							</div>

						</div>
					</div>

</div>
							</div>

						</div>
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
								<p class="footer_about_text">Discover the enchantment of Sri Lanka, a jewel in the
									Indian Ocean, where ancient history, vibrant culture, and stunning landscapes
									converge.</p>
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
										<div class="contact_info_text">+94 75-27-47-549</div>
									</li>
									<li class="contact_info_item d-flex flex-row">
										<div>
											<div class="contact_info_icon"><img src="images/message.svg" alt="">
											</div>
										</div>
										<div class="contact_info_text"><a>
												contact@travelsl.info</a></div>
									</li>
									<li class="contact_info_item d-flex flex-row">
										<div>
											<div class="contact_info_icon"><img src="images/planet-earth.svg" alt="">
											</div>
										</div>
										<div class="contact_info_text"><a href="">www.Travelsl.info</a></div>
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
									<li class="footer_nav_item"><a href="about.html">about us</a></li>
									<li class="footer_nav_item"><a href="contact.html">contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<script src="//code.tidio.co/gme73exbixnw0nvu4blbt5zkvc2ojjss.js" async></script>
<script src="js/jquery-3.2.1.min.js"></script>
		<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/jquery-circle-progress-1.2.2/circle-progress.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/elements_custom.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="js/custom.js"></script>
</body>

</html>