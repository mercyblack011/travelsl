<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marble Beach-Travelsl</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../styles-2/header.css">

    <style>
        /* ══ TRAVELSL PLACE PAGE — BRAND STYLES ══ */
        :root {
            --orange: #FF9500;
            --purple: #7B2FBE;
            --dark: #1a1a2e;
            --grad: linear-gradient(90deg, #FF9500, #7B2FBE);
            --light-bg: #f8f7f4;
        }

        .home_hero { min-height: 420px; }
        .place-content-section { background: #fff; padding: 72px 0 60px; }
        .place-section-header { margin-bottom: 36px; }
        .place-section-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 30px; font-weight: 900;
            color: #1a1a1a; margin-bottom: 10px;
        }
        .place-section-header h2::after {
            content: ''; display: block;
            width: 55px; height: 3px;
            background: var(--orange);
            margin-top: 12px;
        }

        .art p {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 14px !important;
            color: #555 !important;
            line-height: 1.9 !important;
            margin-bottom: 20px !important;
            text-align: justify;
        }

        .map {
            height: 420px !important;
            margin-top: 60px !important;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 12px 40px rgba(0,0,0,0.12);
        }
        .map iframe { border-radius: 14px; }

        .review-section { background: var(--light-bg); padding: 72px 0 60px; }
        .review-section-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 22px; font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #1a1a1a;
            text-align: center;
            margin-bottom: 10px;
        }
        .review-section-title::after {
            content: ''; display: block;
            width: 50px; height: 3px;
            background: var(--orange);
            margin: 10px auto 0;
        }
        .review-section-subtitle {
            font-family: 'Montserrat', sans-serif;
            font-size: 13px;
            color: #888;
            text-align: center;
            margin-bottom: 36px;
        }

        #feedback {
            background: #fff !important;
            border-radius: 16px !important;
            border: none !important;
            box-shadow: 0 8px 32px rgba(0,0,0,0.08) !important;
            padding: 36px 40px !important;
            max-width: 760px;
            margin: 0 auto !important;
        }
        #feedback .form-control {
            border: 1.5px solid #e8e8e8 !important;
            border-radius: 8px !important;
            font-family: 'Montserrat', sans-serif !important;
            font-size: 13px !important;
            color: #333 !important;
            background: #fafafa !important;
            padding: 12px 16px !important;
            transition: border-color 0.3s !important;
        }
        #feedback .form-control:focus {
            border-color: var(--orange) !important;
            box-shadow: 0 0 0 3px rgba(255,149,0,0.12) !important;
            background: #fff !important;
            outline: none !important;
        }
        #feedback label {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 11px !important;
            font-weight: 700 !important;
            letter-spacing: 1px !important;
            text-transform: uppercase !important;
            color: #444 !important;
            margin-bottom: 6px !important;
        }
        #feedback .form-check-label {
            font-size: 22px !important;
            color: #ddd !important;
            cursor: pointer;
        }
        #feedback input[type="radio"]:checked ~ label,
        #feedback input[type="radio"]:checked + label {
            color: var(--orange) !important;
        }

        .button.button_line_1 {
            background: var(--orange) !important;
            border-radius: 30px !important;
            height: 48px !important;
            width: auto !important;
            padding: 0 36px !important;
            border: none !important;
            cursor: pointer;
            display: inline-flex !important;
            align-items: center;
            justify-content: center;
        }
        .button.button_line_1:hover { background: var(--purple) !important; }
        .button.button_line_1 .button_bcg { display: none !important; }

        .reviews-section {
            background: #f8f7f4;
            padding: 80px 0 100px;
        }
        .review-layout {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 32px;
            align-items: start;
            max-width: 1100px;
            margin: 0 auto;
        }

        .score-panel {
            background: #1a1a2e;
            border-radius: 20px;
            padding: 40px 32px;
            position: sticky;
            top: 20px;
            color: #fff;
        }
        .score-big {
            font-family: 'Playfair Display', serif;
            font-size: 80px;
            font-weight: 900;
            color: #FF9500;
            line-height: 1;
            margin-bottom: 12px;
        }
        .score-stars-row { font-size: 22px; letter-spacing: 4px; margin-bottom: 6px; }
        .score-stars-row .f { color: #FF9500; }
        .score-stars-row .e { color: rgba(255,255,255,0.2); }
        .score-count {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.45);
            margin-bottom: 36px;
        }
        .bar-row { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
        .bar-label { font-size: 11px; font-weight: 700; color: rgba(255,255,255,0.5); width: 14px; text-align: right; }
        .bar-track { flex: 1; height: 6px; background: rgba(255,255,255,0.08); border-radius: 3px; overflow: hidden; }
        .bar-fill { height: 100%; border-radius: 3px; background: linear-gradient(90deg,#FF9500,#7B2FBE); }
        .bar-count { font-size: 10px; color: rgba(255,255,255,0.3); width: 16px; text-align: right; }
        .score-divider { border: none; border-top: 1px solid rgba(255,255,255,0.07); margin: 28px 0; }
        .write-btn {
            display: block;
            width: 100%;
            padding: 13px 0;
            background: linear-gradient(135deg,#FF9500,#7B2FBE);
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-align: center;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            transition: opacity 0.2s;
        }
        .write-btn:hover { opacity: 0.85; }

        .filter-tabs { display: flex; gap: 8px; margin-bottom: 20px; flex-wrap: wrap; }
        .rtab {
            padding: 7px 18px;
            border-radius: 20px;
            border: 1.5px solid #e0e0e0;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #999;
            cursor: pointer;
            background: #fff;
            transition: all 0.2s;
        }
        .rtab.active, .rtab:hover {
            background: #FF9500;
            border-color: #FF9500;
            color: #fff;
        }

        .review-card {
            background: #fff;
            border-radius: 16px;
            padding: 28px 30px;
            margin-bottom: 20px;
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            transition: transform 0.25s, box-shadow 0.25s;
            position: relative;
            overflow: hidden;
        }
        .review-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 28px;
            right: 28px;
            height: 3px;
            background: linear-gradient(90deg,#FF9500,#7B2FBE);
            border-radius: 0 0 3px 3px;
            opacity: 0;
            transition: opacity 0.25s;
        }
        .review-card:hover::before { opacity: 1; }
        .review-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 32px rgba(0,0,0,0.09);
        }

        .card-top { display: flex; align-items: center; gap: 14px; margin-bottom: 16px; }
        .rc-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 18px;
            color: #fff;
            flex-shrink: 0;
        }
        .card-meta { flex: 1; }
        .card-name {
            font-size: 13px;
            font-weight: 800;
            color: #1a1a1a;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .card-stars-row { font-size: 14px; letter-spacing: 2px; }
        .card-stars-row .f { color: #FF9500; }
        .card-stars-row .e { color: #e0e0e0; }
        .card-badge {
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            background: rgba(255,149,0,0.1);
            color: #FF9500;
            padding: 4px 10px;
            border-radius: 20px;
        }
        .card-text {
            font-size: 13.5px;
            color: #555;
            line-height: 1.85;
            margin-bottom: 16px;
        }
        .card-footer-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 14px;
            border-top: 1px solid #f5f5f5;
        }
        .card-date { font-size: 11px; color: #bbb; font-weight: 500; }
        .verified {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 10px;
            font-weight: 700;
            color: #22c55e;
            letter-spacing: 1px;
        }
        .verified-dot {
            width: 16px;
            height: 16px;
            background: #22c55e;
            color: #fff;
            font-size: 9px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .helpful-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 11px;
            font-weight: 600;
            color: #999;
            cursor: pointer;
            background: none;
            border: none;
            font-family: 'Montserrat', sans-serif;
            transition: color 0.2s;
        }
        .helpful-btn:hover { color: #FF9500; }

        .load-more { text-align: center; margin-top: 12px; }
        .load-more-btn {
            background: none;
            border: 1.5px solid #e0e0e0;
            color: #888;
            font-family: 'Montserrat', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 12px 32px;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.2s;
        }
        .load-more-btn:hover {
            border-color: #FF9500;
            color: #FF9500;
        }

        @media (max-width: 900px) {
            .review-layout { grid-template-columns: 1fr; }
            .score-panel { position: static; }
        }

        .preloader.hidden { opacity: 0; visibility: hidden; pointer-events: none; }
    </style>
</head>

<body>

    <div class="super_container">

        <!-- TOP BAR -->
        <div class="top_bar">
            <div class="container">
                <div class="social">
                    <ul class="social_list">
                        <li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="social_list_item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
                        <li class="main_nav_item"><a href="/">HOME</a></li>
                        <li class="main_nav_item"><a href="../about.html">ABOUT US</a></li>
                        <li class="main_nav_item"><a href="../contact">CONTACT US</a></li>
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
                <a href="/" class="logo">
                    <div class="logo_pin"><div class="logo_pin_dot"></div></div>
                    <span>TRAVELSL</span>
                </a>
            </div>
            <ul class="mobile_nav_list">
                <li><a href="/">HOME</a></li>
                <li><a href="../about.html">ABOUT US</a></li>
                <li><a href="../contact">CONTACT US</a></li>
            </ul>
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

        <!-- HERO -->
        <div class="home_hero">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "travelsl_db";

            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT image_url FROM place WHERE name = 'Marble Beach'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="hero_bg" style="background-image: url(\'' . $row["image_url"] . '\');"></div>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
            <div class="hero_overlay"></div>
            <div class="hero_content">
                <div class="hero_eyebrow">+ DISCOVER SRI LANKA</div>
                <h1 class="hero_title">Marble <span class="hero_title_orange">Beach</span></h1>
            </div>
            <div class="hero_bottom_bar"></div>
        </div>

        <!-- PLACE CONTENT -->
        <div class="place-content-section">
            <div class="container">
                <section class="content-1">
                    <div class="place-section-header"><h2>About This Place</h2></div>
                    <article class="art">
                        <p>Located along the pristine coastline of Sri Lanka's eastern province, Marble Beach is a hidden gem of natural beauty and serenity that offers visitors the perfect escape from the hustle and bustle of modern life. Nestled amidst swaying palm trees and crystal-clear waters, this idyllic stretch of coastline is renowned for its powdery white sands, calm turquoise lagoons, and stunning sunsets, making it a favorite destination for beach lovers and sun-seekers alike.</p>
<p>As you step onto Marble Beach, you're greeted by the gentle sound of waves lapping against the shore and the warm embrace of the tropical sun. The beach is fringed by lush vegetation and dotted with colorful fishing boats, creating a picturesque setting that feels like paradise on earth.</p>
<p>But Marble Beach is more than just a place to relax and unwind; it's also a haven for water sports enthusiasts and adventure seekers. The surrounding waters are teeming with marine life, making it an ideal spot for snorkeling, diving, and exploring colorful coral reefs. And for those who prefer to stay on dry land, the beach offers plenty of opportunities for swimming, sunbathing, and beachcombing.</p>
<p>For those seeking a taste of local culture and cuisine, Marble Beach offers a variety of dining options, from fresh seafood BBQs to traditional Sri Lankan curries served with rice and roti. Whether you're dining under the stars on the beach or sampling street food at a bustling market, the flavors of Sri Lanka are sure to tantalize your taste buds and leave you craving more.</p>
<p>So whether you're a beach bum, an adventure junkie, or simply someone looking to reconnect with nature, Marble Beach beckons with open arms, inviting you to experience the beauty and tranquility of this hidden paradise.</p>
                    </article>

                    <div>
                        <p class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31567.062598680837!2d81.19083938603849!3d8.510756705729074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afba3ab9d83985d%3A0xc2703d5787826725!2zTWFyYmxlIEJlYWNoIC0g4La44LeP4La24La94LeKIOC2tuC3k-C2oOC3ig!5e0!3m2!1sen!2slk!4v1714461799951!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </p>
                    </div>
                </section>
            </div>

            <script src="https://use.fontawesome.com/a6f0361695.js"></script>

        </div><!-- end place-content-section -->

        <!-- REVIEW FORM SECTION -->
        <div class="review-section">
            <div class="container">
                <div class="review-section-title">WE APPRECIATE YOUR REVIEW!</div>
                <div class="review-section-subtitle">Your review will help us improve our services and help other travellers.</div>

                <?php
                $host = 'localhost';
                $username = 'root';
                $password = '';
                $dbname = 'travelsl_db';

                $conn = new mysqli($host, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $nameError = $emailError = $ratingError = $reviewError = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $isValid = true;

                    if (empty($_POST['name'])) {
                        $nameError = "Name is required.";
                        $isValid = false;
                    } else {
                        $name = $_POST['name'];
                    }

                    if (empty($_POST['email'])) {
                        $emailError = "Email is required.";
                        $isValid = false;
                    } else {
                        $email = $_POST['email'];
                    }

                    if (empty($_POST['rating'])) {
                        $ratingError = "Rating is required.";
                        $isValid = false;
                    } else {
                        $rating = intval($_POST['rating']);
                    }

                    if (empty($_POST['review'])) {
                        $reviewError = "Review is required.";
                        $isValid = false;
                    } else {
                        $review = $_POST['review'];
                    }

                    if ($isValid) {
                        $stmt = $conn->prepare("INSERT INTO reviews (name, email, rating, review) VALUES (?, ?, ?, ?)");
                        $stmt->bind_param("ssis", $name, $email, $rating, $review);

                        if ($stmt->execute()) {
                            $stmt->close();
                            echo '<script>window.location.href = "";</script>';
                            exit();
                        } else {
                            echo "<p>Error: " . $stmt->error . "</p>";
                        }
                    }
                }
                ?>

                <!-- Review Form -->
                <form id="feedback" action="" method="post">
                    <br><br>
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
                    <div class="form-group">
                        <button type="submit" class="button button_line_1 trans_200">Submit<span></span><span></span><span></span></button>
                    </div>
                </form>

            </div><!-- end container -->
        </div><!-- end review-section -->

        <!-- REVIEWS DISPLAY -->
        <div class="reviews-section">
            <div class="container">

                <div class="review-section-title" style="font-family:'Playfair Display',serif;font-size:34px;font-weight:900;color:#1a1a1a;text-align:center;margin-bottom:10px;text-transform:none;letter-spacing:0;">
                    Rating & <span style="color:#FF9500;">Reviews</span>
                </div>
                <div class="review-section-subtitle">Real experiences from real travellers</div>

                <?php
                $conn = new mysqli($host, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sqlRatings = "SELECT rating FROM reviews";
                $resultRatings = $conn->query($sqlRatings);
                $totalRating = 0;
                $number_of_ratings = $resultRatings->num_rows;
                $star_counts = [1=>0,2=>0,3=>0,4=>0,5=>0];

                if ($number_of_ratings > 0) {
                    while ($row = $resultRatings->fetch_assoc()) {
                        $totalRating += $row['rating'];
                        $star_counts[intval($row['rating'])]++;
                    }
                    $average_rating = $totalRating / $number_of_ratings;
                } else {
                    $average_rating = 0;
                }

                $sql = "SELECT name, rating, review, DATE_FORMAT(created_at, '%h:%i %p') as time_ago FROM reviews ORDER BY id DESC";
                $result = $conn->query($sql);
                $reviews = [];
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $reviews[] = $row;
                    }
                }
                $conn->close();

                $avatar_grads = [
                    'linear-gradient(135deg,#FF9500,#ff6b00)',
                    'linear-gradient(135deg,#7B2FBE,#a855f7)',
                    'linear-gradient(135deg,#FF9500,#7B2FBE)',
                    'linear-gradient(135deg,#06b6d4,#3b82f6)',
                    'linear-gradient(135deg,#ec4899,#f43f5e)',
                ];
                ?>

                <div class="review-layout">

                    <!-- LEFT: Score Panel -->
                    <div class="score-panel">
                        <div class="score-big"><?php echo number_format($average_rating, 1); ?></div>
                        <div class="score-stars-row">
                            <?php for($i=0;$i<floor($average_rating);$i++): ?><span class="f">★</span><?php endfor; ?>
                            <?php for($i=0;$i<5-floor($average_rating);$i++): ?><span class="e">★</span><?php endfor; ?>
                        </div>
                        <div class="score-count"><?php echo $number_of_ratings; ?> Verified Reviews</div>
                        <?php foreach([5,4,3,2,1] as $star): ?>
                        <div class="bar-row">
                            <div class="bar-label"><?php echo $star; ?></div>
                            <div class="bar-track">
                                <div class="bar-fill" style="width:<?php echo $number_of_ratings > 0 ? round(($star_counts[$star]/$number_of_ratings)*100) : 0; ?>%"></div>
                            </div>
                            <div class="bar-count"><?php echo $star_counts[$star]; ?></div>
                        </div>
                        <?php endforeach; ?>
                        <hr class="score-divider">
                        <button class="write-btn" onclick="document.getElementById('feedback').scrollIntoView({behavior:'smooth'})">Write a Review</button>
                    </div>

                    <!-- RIGHT: Reviews List -->
                    <div>
                        <div class="filter-tabs">
                            <div class="rtab active" onclick="filterReviews(0,this)">All</div>
                            <div class="rtab" onclick="filterReviews(5,this)">5 ★</div>
                            <div class="rtab" onclick="filterReviews(4,this)">4 ★</div>
                            <div class="rtab" onclick="filterReviews(3,this)">3 ★</div>
                            <div class="rtab" onclick="filterReviews(2,this)">2 ★</div>
                            <div class="rtab" onclick="filterReviews(1,this)">1 ★</div>
                        </div>
                        <div class="reviews-list" id="reviewsList">
                            <?php
                            $badge_colors = [5=>'background:rgba(255,149,0,0.1);color:#FF9500;',4=>'background:rgba(123,47,190,0.1);color:#7B2FBE;',3=>'background:rgba(6,182,212,0.1);color:#06b6d4;',2=>'background:rgba(239,68,68,0.1);color:#ef4444;',1=>'background:rgba(239,68,68,0.1);color:#ef4444;'];
                            foreach($reviews as $idx => $review):
                                $grad = $avatar_grads[$idx % count($avatar_grads)];
                                $rating = intval($review['rating']);
                                $badge_style = $badge_colors[$rating] ?? $badge_colors[5];
                            ?>
                            <div class="review-card" data-rating="<?php echo $rating; ?>">
                                <div class="card-top">
                                    <div class="rc-avatar" style="background:<?php echo $grad; ?>"><?php echo strtoupper(substr($review['name'],0,1)); ?></div>
                                    <div class="card-meta">
                                        <div class="card-name"><?php echo htmlspecialchars($review['name']); ?></div>
                                        <div class="card-stars-row">
                                            <?php for($i=0;$i<$rating;$i++): ?><span class="f">★</span><?php endfor; ?>
                                            <?php for($i=0;$i<5-$rating;$i++): ?><span class="e">★</span><?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="card-badge" style="<?php echo $badge_style; ?>"><?php echo $rating; ?> Stars</div>
                                </div>
                                <p class="card-text"><?php echo htmlspecialchars($review['review']); ?></p>
                                <div class="card-footer-row">
                                    <div style="display:flex;align-items:center;gap:12px;">
                                        <span class="card-date"><?php echo $review['time_ago']; ?></span>
                                        <span class="verified"><span class="verified-dot">✓</span>VERIFIED</span>
                                    </div>
                                    <button class="helpful-btn">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3H14z"/><path d="M7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/></svg>
                                        Helpful
                                    </button>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="load-more">
                            <button class="load-more-btn" id="loadMoreBtn" onclick="loadMore()">Load More Reviews</button>
                        </div>
                    </div>

                </div><!-- end review-layout -->
            </div><!-- end container -->
        </div><!-- end reviews-section -->

        <script>
            function filterReviews(stars,el){document.querySelectorAll('.rtab').forEach(function(t){t.classList.remove('active')});el.classList.add('active');document.querySelectorAll('.review-card').forEach(function(card){if(stars===0||parseInt(card.getAttribute('data-rating'))===stars){card.style.display=''}else{card.style.display='none'}})}
            var shown=3;var cards=document.querySelectorAll('.review-card');
            cards.forEach(function(c,i){if(i>=shown)c.style.display='none'});
            if(cards.length<=shown){document.getElementById('loadMoreBtn').style.display='none'}
            function loadMore(){var hidden=document.querySelectorAll('.review-card[style*="none"]');var count=0;hidden.forEach(function(c){if(count<3){c.style.display='';count++}});if(document.querySelectorAll('.review-card[style*="none"]').length===0){document.getElementById('loadMoreBtn').style.display='none'}}
        </script>

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
							<li class="footer_nav_item"><a href="../contact">contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<script>
	// PRELOADER
	window.addEventListener('load', function () {
		setTimeout(function () {
			var p = document.getElementById('preloader');
			if (p) p.classList.add('hidden');
		}, 600);
	});
	// HAMBURGER
	var hamburger  = document.getElementById('hamburger');
	var mobileMenu = document.getElementById('mobileMenu');
	var menuClose  = document.getElementById('menuClose');
	if (hamburger) hamburger.addEventListener('click', function () { mobileMenu.classList.add('open'); document.body.style.overflow='hidden'; });
	if (menuClose) menuClose.addEventListener('click', function () { mobileMenu.classList.remove('open'); document.body.style.overflow=''; });
	document.addEventListener('keydown', function(e){ if(e.key==='Escape'&&mobileMenu){ mobileMenu.classList.remove('open'); document.body.style.overflow=''; }});
</script>
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
