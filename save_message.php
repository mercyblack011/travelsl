<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Check if the form fields are set and not empty
if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']) &&
    !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = '';                  // SMTP username
        $mail->Password   = '';                  // SMTP password or app password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('');                   // Add your email address or recipient's email address

        // Content
        $mail->isHTML(true);                                       // Set email format to HTML
        $subject = "Travelsl Contact: " . $_POST['subject'];               // Prepend "travelsl: " to subject
        $mail->Subject = $subject;
        $mail->Body    = "<p><strong>Name:</strong> {$_POST['name']}</p>"
                       . "<p><strong>Email:</strong> {$_POST['email']}</p>"
                       . "<p><strong>Message:</strong><br>{$_POST['message']}</p>";

        // Send email
        $mail->send();
        header("Location: contact.html");  // Redirect to contact page
        exit(); // Stop further execution
    } catch (Exception $e) {
        echo "error: " . $mail->ErrorInfo;
    }
} else {
    // If any of the form fields are missing or empty, return an error message
    echo "error: Missing form fields";
}
?>
