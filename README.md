# TRAVELSL - Sri Lanka Travel Guide & Discovery Platform

![TRAVELSL](images/logo-meta.png)

> **A comprehensive travel website for discovering Sri Lanka's most beautiful destinations, cultural landmarks, and adventure experiences.**

---

## 📋 Table of Contents

1. [Project Overview](#project-overview)
2. [Technology Stack](#technology-stack)
3. [Project Structure](#project-structure)
4. [Variable Guide](#variable-guide)
5. [Authentication & Security](#authentication--security)
6. [Database Schema](#database-schema)
7. [Installation & Setup](#installation--setup)
8. [Deployment Guide](#deployment-guide)
9. [Configuration](#configuration)
10. [API & Features](#api--features)
11. [Troubleshooting](#troubleshooting)
12. [Future Improvements](#future-improvements)
13. [Developer Notes](#developer-notes)
14. [License](#license)

---

## 🌍 Project Overview

**TRAVELSL** is a full-featured travel discovery platform for Sri Lanka that allows users to:

- ✈️ **Browse Places**: Explore categorized destinations (beaches, temples, national parks, museums, etc.)
- 🔍 **Search & Filter**: Find places by province, category, and activity type
- 📝 **Leave Reviews**: Submit and view ratings and reviews for destinations
- 💬 **Contact Support**: Send inquiries directly to the travel team via email
- 📊 **Budget Calculator**: Calculate travel costs based on trip parameters
- 🎨 **Responsive Design**: Full mobile optimization with modern UI/UX

**Target Audience**: Tourists, adventure seekers, and travel planners interested in Sri Lanka

**Current Status**: Active production site serving travel recommendations

---

## 🛠️ Technology Stack

| Layer | Technology | Purpose |
|-------|-----------|---------|
| **Frontend** | HTML5, CSS3, Bootstrap 4, jQuery | Responsive UI & interactivity |
| **Backend** | PHP 8.2+ | Server-side logic & database operations |
| **Database** | MySQL 10.4+ / MariaDB | Data persistence |
| **Server** | Apache 2.4 (via XAMPP) | Web server hosting |
| **Email** | PHPMailer + Gmail SMTP | Email notifications |
| **Font** | Google Fonts (Playfair Display, Montserrat) | Typography |
| **Icons** | Font Awesome 4.7.0 & 6.0.0 | UI icons |
| **Carousel** | Owl Carousel 2 | Image sliders |
| **Analytics** | Google Analytics | User tracking |

---

## 📁 Project Structure

```
travelsl/
├── index.php                    # Homepage with featured places
├── about.html                   # About page (static)
├── contact.html                 # Contact form page
├── all-places.php               # All destinations listing page
├── search1.php                  # Search & filter functionality
├── calculate_budget.php         # Trip budget calculator
├── save_message.php             # Contact form handler
├── 404.html                     # Error page
├── maintenance.html             # Maintenance page
│
├── place/                       # Individual place pages
│   ├── adams-peak.php           # Template: Adams Peak destination
│   ├── sigiriya.php             # Template: Sigiriya Rock Fortress
│   ├── kandy-lake.php           # Template: Kandy destinations
│   ├── galle-fort.php           # Template: Southern destinations
│   └── [90+ destination PHP files]  # Other place pages
│
├── place-image/                 # Place thumbnail images
│   ├── Adam's Peak.jpg
│   ├── Sigiriya.jpg
│   └── [100+ destination images]
│
├── images/                      # General images
│   ├── logo.png                 # Site logo
│   ├── logo-meta.png            # Meta image
│   ├── placeholder.svg          # Placeholder icons
│   └── [other UI images]
│
├── js/                          # JavaScript files
│   ├── jquery-3.2.1.min.js      # jQuery library
│   ├── custom.js                # Main custom scripts
│   ├── header.js                # Header/navigation logic
│   ├── about_custom.js          # About page scripts
│   ├── contact_custom.js        # Contact form validation
│   ├── blog_custom.js           # Blog/article scripts
│   ├── elements_custom.js       # UI element interactions
│   ├── offers_custom.js         # Offers/promotions scripts
│   ├── single_listing_custom.js # Place page scripts
│   └── place/                   # Place-specific scripts
│
├── styles/                      # CSS stylesheets
│   ├── bootstrap4/              # Bootstrap framework
│   ├── main_styles.css          # Homepage styles
│   ├── place_styles.css         # Place page styles
│   ├── contact_styles.css       # Contact page styles
│   ├── elements_styles.css      # Component styles
│   └── responsive.css           # Mobile responsiveness
│
├── styles-2/                    # Additional/modern stylesheets
│   ├── booking.css              # Booking-related styles
│   ├── header.css               # Header styling
│   ├── custom.css               # Custom overrides
│   └── bootstrap-4.1.2/         # Alternate Bootstrap version
│
├── plugins/                     # Third-party libraries
│   ├── font-awesome-4.7.0/      # Icon library
│   ├── OwlCarousel2-2.2.1/      # Carousel plugin
│   ├── OwlCarousel2-2.3.4/      # Carousel v2
│   ├── greensock/               # Animation library
│   ├── scrollmagic/             # Scroll animations
│   ├── parallax-js-master/      # Parallax effects
│   └── easing/                  # Animation easing
│
├── PHPMailer/                   # Email library
│   ├── PHPMailer.php            # Main PHPMailer class
│   ├── SMTP.php                 # SMTP handler
│   ├── Exception.php            # Exception handling
│   ├── OAuth.php                # OAuth support
│   └── POP3.php                 # POP3 support
│
├── fonts/                       # Custom fonts
├── wp-admin/                    # WordPress legacy (not active)
├── truism.sql                   # Database dump/schema
├── README.md                    # This file
└── .well-known/                 # SSL/domain verification
```

---

## 📊 Variable Guide

### Database Variables

#### **Connection Configuration** (Used in multiple PHP files)

```php
$servername = "localhost";     // MySQL server hostname
$username = "root";             // MySQL username (default for XAMPP)
$password = "";                 // MySQL password (empty for local XAMPP)
$database = "travelsl_db";      // Database name
```

#### **Connection Object**

```php
$conn = new mysqli($servername, $username, $password, $database);
// OR with PDO:
$db = new PDO('mysql:host=localhost;dbname=travelsl_db', 'root', '');
```

### Place Variables

```php
$row["id"]                  // Unique place identifier (Integer)
$row["province"]            // Region: "Central", "Southern", "Western" (String)
$row["category"]            // Type: "Monuments", "Beaches", "National Parks" (String)
$row["activity"]            // Activity type: "Sightseeing", "Water Sports" (String)
$row["url"]                 // PHP file path: "place/adams-peak.php" (String)
$row["name"]                // Place name: "Adam's Peak" (String)
$row["image_url"]           // Image path: "place-image/Adam's Peak.jpg" (String)
$row["short_description"]   // Brief description for listings (String)
```

### Review/Rating Variables

```php
$name                       // Reviewer's full name (String, required)
$email                      // Reviewer's email address (String, required)
$rating                     // Star rating: 1-5 (Integer, required)
$review                     // Review text content (String, required)
$totalRating                // Sum of all ratings (Integer)
$number_of_ratings          // Count of reviews (Integer)
$average_rating             // Mean rating: totalRating/count (Float)
$star_counts[1-5]           // Count of reviews per star level (Array)
```

### Contact Form Variables

```php
$name                       // Contact form name field (String)
$email                      // Contact form email field (String)
$subject                    // Message subject (String)
$message                    // Message body content (String)
$nameError                  // Name validation error message (String)
$emailError                 // Email validation error message (String)
$subjectError               // Subject validation error message (String)
$messageError               // Message validation error message (String)
```

### Search & Filter Variables

```php
$prov                       // Selected province for filtering (String)
$categories                 // Array of place categories (Array)
$totalCount                 // Total places matching filter (Integer)
$catStmt                    // Database prepared statement (PDOStatement)
```

### Email/SMTP Variables

```php
$mail->Host = 'smtp.gmail.com';           // SMTP server hostname
$mail->Username = '';                      // Gmail address (needs setup)
$mail->Password = '';                      // Gmail app password
$mail->SMTPSecure = 'tls';                 // Encryption type
$mail->Port = 587;                         // SMTP port number
```

### Session Variables

```php
$_SESSION['user_id']        // Current user identifier (if logged in)
$_SERVER['REQUEST_METHOD']  // HTTP method: "GET", "POST", "PUT"
$_POST['field_name']        // Form submission data
$_GET['query']              // URL query parameters
```

---

## 🔐 Authentication & Security

### Current Implementation

**⚠️ IMPORTANT**: The current application **does NOT have user authentication**. It is a public website where:
- All users can view all places
- Anyone can submit reviews without login
- Contact forms are public

### Security Measures Implemented

| Feature | Implementation | Status |
|---------|----------------|--------|
| **Input Validation** | `test_input()` function with `htmlspecialchars()` | ✅ Active |
| **SQL Injection Prevention** | Prepared statements (`bind_param()`, PDO) | ✅ Active |
| **Password Encryption** | N/A (No user accounts) | ⚠️ N/A |
| **Session Management** | Basic `session_start()` | ⚠️ Minimal |
| **HTTPS** | Should be configured on server | ⚠️ Verify |
| **CSRF Protection** | NOT implemented | ❌ Missing |
| **Rate Limiting** | NOT implemented | ❌ Missing |
| **Email Verification** | NOT implemented | ❌ Missing |

### Input Validation Function

```php
function test_input($data) {
    $data = trim($data);              // Remove whitespace
    $data = stripslashes($data);      // Remove escape characters
    $data = htmlspecialchars($data);  // Convert special chars to HTML entities
    return $data;
}
```

### Prepared Statements Example

```php
// Secure query with placeholders
$stmt = $conn->prepare("INSERT INTO reviews (name, email, rating, review) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $name, $email, $rating, $review);
// s = string, i = integer
```

### Recommended Security Enhancements

```php
// 1. Add CSRF tokens
session_start();
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

// 2. Implement rate limiting
$_SESSION['form_attempts'] = ($_SESSION['form_attempts'] ?? 0) + 1;
if ($_SESSION['form_attempts'] > 5) {
    die("Too many attempts. Try again later.");
}

// 3. Add email verification
// Send confirmation link before storing review

// 4. Implement CORS headers
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
```

### Email Security (PHPMailer)

- Uses **Gmail SMTP** for secure email sending
- Requires **Gmail App Password** (not regular password)
- Supports **TLS encryption** on port 587
- Currently requires configuration with credentials

### Database Credentials

⚠️ **CRITICAL**: Database credentials are hardcoded in PHP files. For production:

```php
// ❌ CURRENT (Unsafe)
$username = "root";
$password = "";

// ✅ RECOMMENDED
// Store in environment variables or secure config
$username = getenv('DB_USER');
$password = getenv('DB_PASS');

// Or use .env file
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
```

---

## 🗄️ Database Schema

### Table: `place`

Stores destination information.

```sql
CREATE TABLE `place` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `province` VARCHAR(512) -- Region: "Central Province", "Southern Province", "Western Province"
  `category` VARCHAR(512) -- "Monuments", "Beaches", "National Parks", "Museums", "Cultural Events"
  `activity` VARCHAR(512) -- "Sightseeing", "Water Sports", "Wildlife Watching", "Cultural Exploration"
  `url` VARCHAR(512)      -- PHP file path for the place page
  `name` VARCHAR(512)     -- Place name
  `image_url` VARCHAR(512) -- Path to thumbnail image
  `short_description` VARCHAR(512) -- Brief description for listings
);
```

**Sample Data** (from truism.sql):
- 95 destinations across 3 provinces
- Covers beaches, temples, national parks, waterfalls, museums

**Indexes** (Recommended for production):
```sql
CREATE INDEX idx_province ON place(province);
CREATE INDEX idx_category ON place(category);
CREATE INDEX idx_activity ON place(activity);
```

---

### Table: `reviews`

Stores user reviews and ratings.

```sql
CREATE TABLE `reviews` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,        -- Reviewer's name
  `email` VARCHAR(255) NOT NULL,       -- Reviewer's email
  `rating` INT NOT NULL,                -- Star rating: 1-5
  `review` TEXT NOT NULL,               -- Review content
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

**Indexes** (Recommended):
```sql
CREATE INDEX idx_rating ON reviews(rating);
CREATE INDEX idx_created_at ON reviews(created_at);
```

---

### Table: `contact`

Stores contact form submissions.

```sql
CREATE TABLE `contact` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `subject` VARCHAR(255) NOT NULL,
  `message` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

**Example Records**:
```sql
(1, 'test', 'debrajsmith479@gmail.com', 'hi', 'test test', '2024-03-03 05:35:48')
(2, 'cxcv', 'mercyblack011@gmail.com', 'hi', 'ghh', '2024-04-29 09:04:41')
```

---

## 💾 Installation & Setup

### Prerequisites

| Requirement | Version | Notes |
|-------------|---------|-------|
| PHP | 8.0+ | PHP 8.2.12 recommended |
| MySQL | 5.7+ | MariaDB 10.4+ compatible |
| Apache | 2.4+ | Via XAMPP recommended |
| Modern Browser | Latest | Chrome, Firefox, Safari, Edge |

### Local Development Setup

#### Step 1: Clone/Download Project

```bash
# Option 1: Via Git
git clone https://github.com/your-repo/travelsl.git
cd travelsl

# Option 2: Download ZIP
# Extract to your webroot: C:\xampp\htdocs\travel\travelsl
```

#### Step 2: Configure XAMPP

```bash
# 1. Start XAMPP Control Panel
# 2. Start Apache
# 3. Start MySQL

# Verify:
# - Apache: http://localhost (should show XAMPP dashboard)
# - MySQL: http://localhost/phpmyadmin
```

#### Step 3: Create Database

```bash
# Method 1: PHPMyAdmin UI
# 1. Go to http://localhost/phpmyadmin
# 2. Click "New Database"
# 3. Name: "travelsl_db"
# 4. Collation: "utf8mb4_general_ci"
# 5. Click "Create"

# Method 2: Command Line
mysql -u root -p
CREATE DATABASE travelsl_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE travelsl_db;
```

#### Step 4: Import Database Schema

```bash
# Method 1: PHPMyAdmin
# 1. Select travelsl_db database
# 2. Click "Import" tab
# 3. Choose truism.sql file
# 4. Click "Go"

# Method 2: Command Line
mysql -u root travelsl_db < truism.sql

# Method 3: PHP Terminal
mysql -u root -p travelsl_db < path/to/truism.sql
```

#### Step 5: Verify Installation

```bash
# Visit homepage
http://localhost/travel/travelsl/index.php

# Test database connection
# You should see featured places loading
```

### Required PHP Extensions

```php
// Verify in php.ini or check via phpinfo()
extension=mysqli       # MySQLi for database
extension=pdo          # PDO for database
extension=pdo_mysql    # PDO MySQL driver
extension=json         # JSON support
extension=curl         # cURL for external requests
```

### Folder Permissions

```bash
# Set writable permissions for uploads (if added)
chmod -R 755 place-image/
chmod -R 755 images/

# Specific files if needed
chmod 644 *.php
chmod 644 *.html
```

---

## 🚀 Deployment Guide

### Production Checklist

- [ ] Domain name registered and configured
- [ ] SSL certificate installed (HTTPS)
- [ ] MySQL database created and imported
- [ ] PHP 8.2+ installed and configured
- [ ] Apache configured with rewrite module
- [ ] Email credentials configured (Gmail App Password)
- [ ] Environment variables set
- [ ] Error reporting disabled (`display_errors = Off`)
- [ ] Backups configured
- [ ] Analytics configured

### Hosting Requirements

| Requirement | Recommended | Minimum |
|-------------|-------------|---------|
| **Storage** | 50GB+ | 5GB |
| **Bandwidth** | Unlimited | 100GB/month |
| **RAM** | 4GB | 512MB |
| **CPU** | 2-4 cores | 1 core |
| **PHP Version** | 8.2+ | 7.4+ |
| **MySQL Version** | 8.0+ | 5.7+ |

### Server Configuration Steps

#### 1. Choose Hosting Provider

Recommended: cPanel hosting providers
- **Bluehost** (official WordPress partner)
- **GoDaddy**
- **Hostinger**
- **SiteGround**
- **DreamHost**

#### 2. Set Up Domain

```bash
# 1. Point domain DNS to hosting provider
# 2. In hosting control panel, add domain to account
# 3. Create public_html folder structure
# 4. Upload files via FTP or File Manager
```

#### 3. Configure Apache

Create `.htaccess` for clean URLs:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /
    
    # Redirect to HTTPS
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
    
    # Remove .php extension
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME}.php -f
    RewriteRule ^([^\.]+)$ $1.php [NC]
    
    # Prevent directory listing
    Options -Indexes
</IfModule>
```

#### 4. Configure PHP

Edit `php.ini`:

```ini
; Production settings
display_errors = Off
error_log = /var/log/php-errors.log
log_errors = On

; Security
expose_php = Off
disable_functions = exec,passthru,system,shell_exec,proc_open
max_execution_time = 300
upload_max_filesize = 50M
post_max_size = 50M

; Database
mysqli.allow_persistent = On
```

#### 5. Configure MySQL

```sql
-- Create database with proper charset
CREATE DATABASE travelsl_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Create dedicated user
CREATE USER 'travelsl'@'localhost' IDENTIFIED BY 'strong_password_here';
GRANT ALL PRIVILEGES ON travelsl_db.* TO 'travelsl'@'localhost';
FLUSH PRIVILEGES;

-- Import schema
SOURCE /path/to/truism.sql;
```

#### 6. Set Up SSL Certificate

```bash
# Using Let's Encrypt (free)
sudo certbot certonly --apache -d yourdomain.com

# Configure in Apache
<VirtualHost *:443>
    ServerName yourdomain.com
    SSLEngine on
    SSLCertificateFile /etc/letsencrypt/live/yourdomain.com/cert.pem
    SSLCertificateKeyFile /etc/letsencrypt/live/yourdomain.com/privkey.pem
</VirtualHost>
```

### Deployment Process (via FTP)

```bash
# 1. Download FileZilla or WinSCP
# 2. Connect with FTP credentials
# 3. Navigate to public_html folder
# 4. Upload all files except:
#    - /node_modules (if any)
#    - /.git
#    - /README.md
#    - Database backups
# 5. Set permissions:
#    - Folders: 755
#    - Files: 644
# 6. Test at yourdomain.com
```

### Environment Configuration

Create `.env` file (or use environment variables):

```env
# Database
DB_HOST=localhost
DB_NAME=travelsl_db
DB_USER=travelsl
DB_PASS=strong_password

# Email (Gmail)
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_FROM=contact@yourdomain.com

# Application
APP_NAME=TRAVELSL
APP_ENV=production
APP_DEBUG=false
APP_URL=https://travelsl.info

# Analytics
GOOGLE_ANALYTICS_ID=G-VE6ZQVK3NG
```

Update PHP files to use environment variables:

```php
<?php
// Load environment variables
$env = parse_ini_file('.env');

$host = $env['DB_HOST'];
$username = $env['DB_USER'];
$password = $env['DB_PASS'];
$dbname = $env['DB_NAME'];
?>
```

### Production Optimization

```php
// 1. Enable output compression
ini_set('zlib.output_compression', 'On');

// 2. Cache headers
header("Cache-Control: public, max-age=3600");
header("Pragma: public");
header("Expires: " . date('r', time() + 3600));

// 3. Minimize database queries
// Use caching (Redis/Memcached)
// Batch queries where possible

// 4. Lazy load images
<img src="image.jpg" loading="lazy" alt="description">

// 5. Minify CSS/JS in production
// Use build tools like Webpack, Gulp
```

### Backup Strategy

```bash
# Daily MySQL backup
0 2 * * * mysqldump -u travelsl -p travelsl_db > /backup/travelsl_$(date +\%Y\%m\%d).sql

# Weekly file backup
0 3 * * 0 tar -czf /backup/travelsl_files_$(date +\%Y\%m\%d).tar.gz /var/www/travelsl/

# Store backups securely
# - Off-site storage (AWS S3, Google Cloud)
# - Automatic retention policy (keep 30 days)
```

### Monitoring & Maintenance

```bash
# Check error logs
tail -f /var/log/php-errors.log
tail -f /var/log/apache2/error.log

# Monitor disk usage
df -h

# Monitor database size
SELECT table_schema AS "Database", 
       ROUND(SUM(data_length + index_length) / 1024 / 1024, 2) AS "Size in MB" 
FROM information_schema.tables 
GROUP BY table_schema;

# Check uptime
uptime
```

---

## ⚙️ Configuration

### Database Configuration

Update credentials in these files:

**[search1.php](search1.php)**:
```php
$db = new PDO('mysql:host=localhost;dbname=travelsl_db', 'root', '');
```

**[adams-peak.php](place/adams-peak.php) and other place files**:
```php
$servername = "localhost";
$username = "root";
$password = "";
$database = "travelsl_db";
```

**[save_message.php](save_message.php)**:
```php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'travelsl_db';
```

### Email Configuration

File: [save_message.php](save_message.php)

```php
$mail->Host = 'smtp.gmail.com';
$mail->Username = 'your-email@gmail.com';      // ← Update
$mail->Password = 'your-app-password';         // ← Update
$mail->addAddress('support@travelsl.info');    // ← Update
```

**Generate Gmail App Password**:
1. Go to https://myaccount.google.com
2. Enable 2-Factor Authentication
3. Go to "App passwords"
4. Select Mail and Windows Computer
5. Copy the generated password

### Google Analytics

File: [index.php](index.php)

```html
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VE6ZQVK3NG"></script>
<script>
  gtag('config', 'G-VE6ZQVK3NG');  // ← Update with your ID
</script>
```

### Branding Configuration

Update in stylesheets and HTML:

```css
/* styles/place_styles.css and others */
:root {
    --orange: #FF9500;      /* Primary brand color */
    --purple: #7B2FBE;      /* Secondary brand color */
    --dark: #1a1a1a;        /* Dark text color */
}
```

---

## 🔌 API & Features

### Homepage Features

**File**: [index.php](index.php)

```php
// Display featured places
SELECT * FROM place LIMIT 6;

// Available features:
// - Featured destinations slider
// - Destination categories
// - User testimonials
// - Newsletter signup
// - Call-to-action buttons
```

### All Places Listing

**File**: [all-places.php](all-places.php)

```php
// Retrieve all 95+ destinations
SELECT * FROM place;

// Display with pagination
// Grid layout with place cards
// Click to view individual place page
```

### Search & Filter

**File**: [search1.php](search1.php)

```php
// Filter by province
SELECT * FROM place WHERE province = 'Central Province';

// Filter by category
SELECT * FROM place WHERE category = 'Beaches';

// Filter by activity
SELECT * FROM place WHERE activity = 'Water Sports';

// Combine filters
SELECT * FROM place 
WHERE province = 'Central Province' 
  AND category = 'Monuments'
  AND activity = 'Sightseeing';
```

### Individual Place Pages

**File**: `place/[place-name].php` (e.g., [place/adams-peak.php](place/adams-peak.php))

Each destination includes:

```html
<!-- 1. Hero Section with Background Image -->
SELECT image_url FROM place WHERE id = 2;

<!-- 2. About/Description Section -->
<section class="content-1">
  <article class="art"> <!-- Detailed description -->
  
<!-- 3. Google Map Embed -->
<iframe src="https://www.google.com/maps/embed?pb=..."></iframe>

<!-- 4. Review Submission Form -->
<form id="feedback" method="post">
  - Name input
  - Email input
  - Rating select (1-5 stars)
  - Review textarea
  - Submit button

<!-- 5. Review Display Section -->
- Aggregate rating score
- Rating breakdown (5★, 4★, 3★, 2★, 1★)
- Individual review cards with:
  - Reviewer name & avatar
  - Star rating
  - Review text
  - Timestamp
  - Verified badge
  - Helpful button
```

### Contact Form

**File**: [contact.html](contact.html) → [save_message.php](save_message.php)

```php
// Form fields
POST /save_message.php
- name: string (required)
- email: email (required)
- subject: string (required)
- message: text (required)

// Processing
- Validate inputs
- Send email via PHPMailer
- Store in contact table
- Redirect to contact.html

// Email sent to admin
- Subject: "Travelsl Contact: [user_subject]"
- From: [user_email]
- Body includes all form data
```

### Budget Calculator

**File**: [calculate_budget.php](calculate_budget.php)

Likely features (requires implementation):
```php
// Calculate trip cost based on:
- Number of days
- Number of people
- Accommodation type (budget/mid/luxury)
- Activities/experiences
- Meals
- Transportation

// Return estimated budget
// Breakdown by category
```

### Review Submission

```php
POST /place/[place-name].php
POST data:
- name: string
- email: email
- rating: integer (1-5)
- review: string

INSERT INTO reviews (name, email, rating, review) 
VALUES (?, ?, ?, ?);

// Page auto-refreshes to show new review
```

### Review Filtering

```javascript
// Client-side filtering
filterReviews(5);  // Show 5-star reviews only
filterReviews(0);  // Show all reviews

// Available filters
1★, 2★, 3★, 4★, 5★, All
```

---

## 🐛 Troubleshooting

### Common Issues & Solutions

#### 1. **Database Connection Failed**

**Error Message**:
```
Connection failed: Connection refused
```

**Solutions**:

```bash
# ✅ Check MySQL is running
# Windows: XAMPP Control Panel → Start MySQL
# Linux: sudo systemctl status mysql

# ✅ Verify database credentials
# Database name: travelsl_db
# User: root (local) or travelsl (production)
# Password: (check .env or php.ini)

# ✅ Test connection manually
mysql -u root -h localhost travelsl_db

# ✅ Check port (default 3306)
netstat -an | grep 3306

# ✅ Fix in PHP
$conn = new mysqli("localhost", "root", "", "travelsl_db");
if ($conn->connect_error) {
    error_log("Connection error: " . $conn->connect_error);
    die("Could not connect to database");
}
```

#### 2. **Reviews Not Saving**

**Symptoms**: Form submits but reviews don't appear

**Debug**:

```php
// Add to adams-peak.php
if ($isValid && $_SERVER["REQUEST_METHOD"] == "POST") {
    error_log("Form data: " . json_encode($_POST));
    
    $stmt = $conn->prepare("INSERT INTO reviews (name, email, rating, review) VALUES (?, ?, ?, ?)");
    
    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        die("Database error");
    }
    
    if ($stmt->execute()) {
        error_log("Review inserted successfully");
        header("Location: " . $_SERVER['PHP_SELF']);
    } else {
        error_log("Execute failed: " . $stmt->error);
    }
}
```

**Check**:
- [ ] Table exists: `SHOW TABLES;`
- [ ] Columns correct: `DESCRIBE reviews;`
- [ ] Permissions: `SHOW GRANTS FOR 'root'@'localhost';`
- [ ] Max connections: Increase in `my.cnf`: `max_connections = 1000`

#### 3. **Email Not Sending**

**Error**: Form submits but no email received

**Debug**:

```php
// save_message.php
try {
    $mail->send();
    error_log("Email sent successfully");
} catch (Exception $e) {
    error_log("PHPMailer error: " . $mail->ErrorInfo);
    echo "Email failed: " . $mail->ErrorInfo;
}
```

**Checklist**:
- [ ] Gmail credentials configured
- [ ] Gmail App Password created (not regular password)
- [ ] 2FA enabled on Gmail account
- [ ] Port 587 is open (not blocked by firewall)
- [ ] TLS is enabled in configuration
- [ ] Recipient email address configured

**Test SMTP**:

```php
// test_mail.php
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'your-email@gmail.com';
$mail->Password = 'your-app-password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

if ($mail->smtpConnect()) {
    echo "✅ SMTP connection successful";
} else {
    echo "❌ SMTP connection failed: " . $mail->ErrorInfo;
}
```

#### 4. **Images Not Loading**

**Symptoms**: Broken image icons on place pages

**Causes & Fixes**:

```php
// Wrong path
❌ ../place-image/Adam's Peak.jpg  // Incorrect relative path

// Correct
✅ ./place-image/Adam's Peak.jpg   // From root

// Check file exists
file_exists("place-image/Adam's Peak.jpg") or die("Image not found");

// Check permissions
chmod 644 place-image/*.jpg

// Verify filenames match exactly (case-sensitive on Linux)
ls place-image/  // List actual files
```

#### 5. **Search/Filter Not Working**

**Problem**: Search returns no results

**Debug**:

```php
// search1.php
error_log("Province filter: " . $_POST['province']);

$catStmt = $db->prepare(
    "SELECT TRIM(category) as category, COUNT(*) as count 
     FROM place WHERE province = :province 
     GROUP BY TRIM(category)"
);

if ($catStmt->execute([':province' => $prov])) {
    $categories = $catStmt->fetchAll(PDO::FETCH_ASSOC);
    error_log("Results: " . json_encode($categories));
} else {
    error_log("Query error: " . implode(", ", $catStmt->errorInfo()));
}
```

**Check**:
- [ ] Data exists: `SELECT COUNT(*) FROM place WHERE province = 'Central Province';`
- [ ] Case sensitivity: Province names must match exactly
- [ ] Special characters: Use TRIM() and LIKE for fuzzy matching
- [ ] Encoding: Ensure UTF-8 encoding in database

#### 6. **Page Not Found (404)**

**Symptoms**: Getting 404 error on /place/ pages

**Solutions**:

```bash
# ✅ Check file exists
ls place/adams-peak.php

# ✅ Check filename matches URL
# URL: /place/adams-peak.php
# File: /place/adams-peak.php

# ✅ Check .htaccess rewrites
# Enable mod_rewrite:
sudo a2enmod rewrite
sudo systemctl restart apache2

# ✅ Test direct access
http://localhost/travel/travelsl/place/adams-peak.php
# Should work, not redirect

# ✅ Check permissions
chmod 644 place/adams-peak.php
chmod 755 place/
```

#### 7. **CORS/Security Headers Issues**

**Symptoms**: Mixed content warnings, blocked requests

**Fix in `.htaccess`**:

```apache
# Enable CORS
Header set Access-Control-Allow-Origin "*"
Header set Access-Control-Allow-Methods "GET, POST, OPTIONS"
Header set Access-Control-Allow-Headers "Content-Type"

# Security headers
Header set X-Content-Type-Options "nosniff"
Header set X-Frame-Options "SAMEORIGIN"
Header set X-XSS-Protection "1; mode=block"
Header set Strict-Transport-Security "max-age=31536000; includeSubDomains"

# Force HTTPS
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

#### 8. **Performance Issues / Slow Loading**

**Diagnosis**:

```php
// Measure query time
$start = microtime(true);
$result = $conn->query("SELECT * FROM place");
$time = microtime(true) - $start;
error_log("Query took: " . $time . " seconds");

// Should be < 0.1 seconds
```

**Optimization**:

```php
// 1. Add indexes
CREATE INDEX idx_province ON place(province);
CREATE INDEX idx_category ON place(category);

// 2. Limit results
SELECT * FROM place LIMIT 50;  // Paginate

// 3. Cache results
apcu_store('places', $result, 3600);  // Cache 1 hour
$result = apcu_fetch('places');

// 4. Lazy load images
echo '<img src="image.jpg" loading="lazy">';

// 5. Minify CSS/JS
// Use online tools or Webpack
```

#### 9. **Maximum Execution Time Exceeded**

**Error**: `Fatal error: Maximum execution time exceeded`

**Increase timeout**:

```php
// In php.ini
max_execution_time = 300  ; 5 minutes

// Or in script (before expensive operations)
set_time_limit(300);

// Or specific to file
ini_set('max_execution_time', 300);
```

#### 10. **Upload File Size Limit**

**Error**: File upload fails

```php
// Check in php.ini
upload_max_filesize = 50M
post_max_size = 50M
memory_limit = 256M

// Verify current limits
phpinfo();  // Look for these values
```

---

## 🚀 Future Improvements

### Phase 1: Authentication & User Accounts (High Priority)

```php
// 1. User Registration
CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  email VARCHAR(255) UNIQUE,
  password_hash VARCHAR(255),
  role ENUM('user', 'admin', 'moderator'),
  verified BOOLEAN,
  created_at TIMESTAMP
);

// 2. Login System
function register_user($name, $email, $password) {
  $hash = password_hash($password, PASSWORD_BCRYPT);
  // Insert into users table
}

// 3. Session Management
session_start();
$_SESSION['user_id'] = $user->id;
$_SESSION['role'] = $user->role;

// 4. Protected Routes
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}
```

### Phase 2: Admin Panel (High Priority)

```php
// New files needed:
/admin/
  ├── dashboard.php         // Analytics overview
  ├── places/
  │   ├── manage.php       // CRUD operations
  │   ├── add.php          // New place form
  │   ├── edit.php         // Edit place details
  │   └── delete.php       // Remove place
  ├── reviews/
  │   ├── manage.php       // View/moderate reviews
  │   ├── approve.php      // Publish reviews
  │   └── delete.php       // Remove spam
  ├── messages/
  │   ├── inbox.php        // Contact form messages
  │   └── reply.php        // Email responses
  └── settings/
      └── config.php       // Site configuration
```

### Phase 3: Advanced Features (Medium Priority)

#### A. Booking System

```php
CREATE TABLE bookings (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  place_id INT,
  booking_date DATE,
  num_people INT,
  total_price DECIMAL(10,2),
  status ENUM('pending', 'confirmed', 'cancelled'),
  created_at TIMESTAMP
);

// Features:
- Date & time selection
- Group size options
- Price calculation
- Payment integration (Stripe/PayPal)
- Booking confirmation email
```

#### B. Itinerary Builder

```javascript
// Drag-and-drop interface
// Select multiple places
// Auto-calculate travel time via Google Maps API
// Generate printable itinerary PDF
// Share via email or link

// Database
CREATE TABLE itineraries (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  name VARCHAR(255),
  places JSON,  // Array of place IDs
  created_at TIMESTAMP
);
```

#### C. Weather & Best Time to Visit

```php
// Integrate OpenWeather API
$weather = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=Colombo&appid=API_KEY");

// Display on each place page:
// - Current temperature
// - Best months to visit
// - Rainfall forecast
// - Warnings/alerts
```

#### D. User Wishlist/Favorites

```php
CREATE TABLE favorites (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  place_id INT,
  created_at TIMESTAMP,
  UNIQUE KEY (user_id, place_id)
);

// Features:
- Heart icon to save places
- My Favorites page
- Share wishlist with friends
```

### Phase 4: Mobile & Performance (Medium Priority)

```html
<!-- Progressive Web App (PWA) -->
- Service Worker for offline support
- App manifest for "Install App"
- Push notifications for deals

<!-- Mobile App -->
- React Native or Flutter
- Native map integration
- Offline guide download
```

### Phase 5: Monetization (Lower Priority)

```php
// 1. Affiliate Links
// Amazon Associates, hotel booking links

// 2. Sponsored Listings
// Premium place promotions

// 3. Ad Network
// Google AdSense integration

// 4. Premium Subscriptions
// Ad-free browsing
// Exclusive itineraries
// Early access to deals
```

### Phase 6: Machine Learning (Lower Priority)

```python
# 1. Recommendation Engine
# Suggest places based on browsing history

# 2. Smart Search
# Natural language search ("best beaches near Colombo")

# 3. Chatbot
# AI assistant for travel questions

# 4. Sentiment Analysis
# Analyze review tone automatically
```

### Quick Wins (Easy Additions)

```php
// 1. Newsletter signup
CREATE TABLE newsletter_subscribers (
  id INT, email VARCHAR(255) UNIQUE
);

// 2. Social sharing buttons
<a href="https://facebook.com/sharer/sharer.php?u=URL">Share</a>

// 3. Related places suggestions
SELECT * FROM place WHERE category = :category AND id != :current LIMIT 5;

// 4. Breadcrumb navigation
Home > Places > Central Province > Adam's Peak

// 5. Back to top button
<button onclick="window.scrollTo(0,0)">↑ Back to Top</button>

// 6. Print page functionality
<button onclick="window.print()">🖨️ Print</button>

// 7. Dark mode toggle
localStorage.setItem('theme', 'dark');

// 8. Multiple language support
// i18n library for translations
```

---

## 👨‍💻 Developer Notes

### Important Information Before Editing

#### 1. **Code Style & Conventions**

```php
// Variable naming
$userName = "John";         // camelCase for variables
const DB_HOST = "localhost"; // SCREAMING_SNAKE_CASE for constants
$sql = "SELECT * FROM place"; // Lowercase for SQL keywords

// Indentation: 4 spaces (not tabs)
if ($condition) {
    // 4 spaces indent
}

// Comments
// Use // for single-line comments
/* Use /* */ for multi-line comments */
```

#### 2. **File Structure**

Each place page has this structure:

```php
1. DOCTYPE & HTML head (meta tags, stylesheets)
2. Style block (CSS overrides for branding)
3. Body with:
   a. Top bar (social icons)
   b. Navigation (header with logo)
   c. Mobile menu
   d. Preloader
   e. Hero section (background image from DB)
   f. Place content (description, map)
   g. Review form
   h. Review display
   i. Footer
4. Scripts (jQuery, Bootstrap, custom JS)
```

#### 3. **Database Connection Pattern**

```php
// Pattern used throughout project
$servername = "localhost";
$username = "root";
$password = "";
$database = "travelsl_db";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
```

**To modify**: Update all 4 values consistently

#### 4. **Class & ID Naming**

```html
<!-- Use BEM (Block Element Modifier) where possible -->
<div class="hero_hero">               <!-- Block: hero -->
  <div class="hero_content">          <!-- Element: content -->
    <h1 class="hero_title">           <!-- Element: title -->
    <span class="hero_title_orange">  <!-- Modifier: orange variation -->
</div>
```

#### 5. **Important Global Variables**

```php
// These appear in multiple files - keep consistent
$sql           // Database query string
$result        // Query result object
$conn          // Database connection
$stmt          // Prepared statement
$row           // Fetched row data
$categories    // Array of place categories
$totalCount    // Total places matching filter
$average_rating // Mean rating score
$reviews       // Array of review objects
```

#### 6. **Common Paths to Remember**

```
Root: /xampp/htdocs/travel/travelsl/

Images:       ../images/ or ./images/
Places:       ../place/ or ./place/
Styles:       ../styles/ or ./styles/
JavaScript:   ../js/ or ./js/
Plugins:      ../plugins/ or ./plugins/

Database:     travelsl_db
Tables:       place, reviews, contact
```

#### 7. **Where to Make Changes**

| Change Type | Files to Update |
|-------------|-----------------|
| Database credentials | Every `*.php` file |
| Email settings | `save_message.php` |
| Brand colors | CSS files in `styles/` and `styles-2/` |
| Navigation | `header.php`, `index.php` |
| Place data | Database (via PHPMyAdmin) |
| Footer | Footer section in `index.php` |
| Analytics | `index.php` (Google Analytics ID) |

#### 8. **Testing After Changes**

```bash
# 1. Check syntax
php -l filename.php

# 2. Test in browser
http://localhost/travel/travelsl/index.php

# 3. Check console for errors
F12 in browser → Console tab

# 4. Check server logs
tail /var/log/php-errors.log

# 5. Test database
http://localhost/phpmyadmin
```

#### 9. **Common Mistakes to Avoid**

```php
// ❌ WRONG - Hardcoded credentials
$conn = new mysqli("localhost", "root", "", "travelsl_db");

// ✅ CORRECT - Environment variables
$conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);

// ❌ WRONG - SQL Injection vulnerable
$query = "SELECT * FROM place WHERE id = " . $_GET['id'];

// ✅ CORRECT - Prepared statement
$stmt = $conn->prepare("SELECT * FROM place WHERE id = ?");
$stmt->bind_param("i", $_GET['id']);

// ❌ WRONG - No error checking
$result = $conn->query($sql);
$row = $result->fetch_assoc();  // Crashes if no results

// ✅ CORRECT - Error handling
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
}

// ❌ WRONG - Client-side only validation
<input type="email" required>

// ✅ CORRECT - Server-side validation
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    // Valid email
}
```

#### 10. **How to Add a New Place**

```sql
-- Step 1: Add to database
INSERT INTO place (province, category, activity, url, name, image_url, short_description)
VALUES (
  'Central Province',
  'Monuments',
  'Sightseeing',
  'place/new-place.php',
  'New Place Name',
  'place-image/New Place.jpg',
  'Brief description here'
);

-- Step 2: Create place/new-place.php
-- Copy from place/adams-peak.php
-- Update:
-- - Title
-- - Description content
-- - Map coordinates
-- - Image URL in query

-- Step 3: Upload image to place-image/ folder
-- File size should be optimized (< 200KB)

-- Step 4: Add to homepage/menu (if featured)
-- Edit index.php to include in featured section
```

#### 11. **Debugging Tips**

```php
// Add debug output to log file
error_log("Variable value: " . print_r($variable, true));

// Set PHP to display errors (development only)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check PHP version
phpinfo();

// Test database
$test = $conn->query("SELECT 1");
if ($test) echo "✅ Database connected";

// Var dump to browser (remove after debugging)
var_dump($_POST);
var_dump($row);

// Check if variable exists
isset($variable) ? "exists" : "missing";
empty($variable) ? "empty" : "has value";
```

#### 12. **Version Control Tips**

```bash
# Initialize git (if not already)
git init

# Ignore sensitive files
echo "*.env" >> .gitignore
echo ".env.local" >> .gitignore
echo "wp-admin/" >> .gitignore

# Commit changes
git add .
git commit -m "Describe what changed"

# Tag versions
git tag -a v1.0.0 -m "Version 1.0.0"

# Never commit:
# - Database credentials
# - .env files
# - Large binary files
# - Backup files (*.bak, *.backup)
```

---

## 📄 License

### MIT License

Copyright (c) 2024 TRAVELSL

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

**THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.**

### Alternative License Options

You may choose one of these licenses:

- **MIT License** (above) - Permissive, very flexible
- **Apache 2.0** - Similar to MIT, includes patent protection
- **GPL v3** - Copyleft, modifications must also be open-source
- **CC0** - Public domain, no rights reserved

### Third-Party Licenses

This project uses the following open-source libraries:

| Library | License | Usage |
|---------|---------|-------|
| Bootstrap 4 | MIT | Frontend framework |
| jQuery 3.2.1 | MIT | DOM manipulation |
| Owl Carousel 2 | MIT | Image carousel |
| Font Awesome 4.7.0 & 6.0.0 | CC BY 4.0 / Free | Icons |
| PHPMailer 6.x | LGPL-2.1 | Email sending |
| Google Fonts | Open Source | Typography |

All licenses are included in their respective folders.

### License Compliance

To use this project, you must:

1. ✅ Include the original license text
2. ✅ Include a copy of this notice
3. ✅ Document modifications made
4. ✅ State significantly changed files
5. ❌ NOT hold the authors liable
6. ❌ NOT use trademark without permission

### How to Attribute

Include this notice in your project:

```
TRAVELSL - Sri Lanka Travel Guide
Copyright (c) 2024 TRAVELSL Contributors
Licensed under the MIT License
See LICENSE file or https://opensource.org/licenses/MIT
```

---

## 📚 Additional Resources

### Documentation

- [PHP Official Documentation](https://www.php.net/docs.php)
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [Bootstrap Documentation](https://getbootstrap.com/docs/4.6/)
- [jQuery Documentation](https://api.jquery.com/)
- [MDN Web Docs](https://developer.mozilla.org/)

### Learning Resources

- [W3Schools PHP Tutorial](https://www.w3schools.com/php/)
- [Codecademy PHP Course](https://www.codecademy.com/learn/learn-php)
- [PHP The Right Way](https://phptherightway.com/)
- [Full Stack Development Course](https://www.freecodecamp.org/)

### Tools & Services

- **Code Editor**: [VS Code](https://code.visualstudio.com/), [Sublime Text](https://www.sublimetext.com/)
- **Database GUI**: [PHPMyAdmin](https://www.phpmyadmin.net/), [Navicat](https://www.navicat.com/)
- **FTP Client**: [FileZilla](https://filezilla-project.org/), [WinSCP](https://winscp.net/)
- **API Testing**: [Postman](https://www.postman.com/), [Insomnia](https://insomnia.rest/)
- **Image Optimization**: [TinyPNG](https://tinypng.com/), [ImageOptim](https://imageoptim.com/)

### Community

- [Stack Overflow - PHP Tag](https://stackoverflow.com/questions/tagged/php)
- [PHP Reddit Community](https://www.reddit.com/r/PHP/)
- [Dev.to PHP Articles](https://dev.to/t/php)

---

## 🤝 Contributing

We welcome contributions! Here's how to help:

### Reporting Bugs

1. Check if bug already exists
2. Provide steps to reproduce
3. Include error messages & logs
4. Note your environment (PHP version, OS, etc.)

### Submitting Features

1. Describe the feature clearly
2. Explain why it's needed
3. Provide mock-ups or examples
4. Open an issue first for discussion

### Code Contributions

```bash
# 1. Fork the repository
# 2. Create feature branch
git checkout -b feature/amazing-feature

# 3. Make changes following style guide
# 4. Test thoroughly
# 5. Commit with descriptive message
git commit -m "Add amazing feature: description"

# 6. Push to branch
git push origin feature/amazing-feature

# 7. Open Pull Request on GitHub
```

---

## 📞 Support & Contact

For questions, issues, or support:

- **Email**: contact@travelsl.info
- **Phone**: +94 75-95-45-5239
- **Location**: 4127 Raoul Wallenber 45b-c, Colombo, Sri Lanka
- **Website**: https://www.travelsl.info

---

## 🎉 Acknowledgments

Special thanks to:

- Our dedicated team of travel experts
- All contributors and reviewers
- The open-source community for amazing libraries
- Our users for valuable feedback and suggestions

---

**Last Updated**: May 17, 2026
**Version**: 1.0.0 (Initial Production Release)
**Maintained By**: TRAVELSL Development Team

---

<div align="center">

### Made with ❤️ for Sri Lanka

**[Visit Website](https://www.travelsl.info)** • **[Report Issue](https://github.com)** • **[Contact Us](mailto:contact@travelsl.info)**

</div>
