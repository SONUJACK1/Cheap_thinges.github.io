<?php
if (isset($_POST['buyNow'])) {
    // Replace these with your actual email credentials and details
    $to = 'neha6n@gmail.com';
    $subject = 'Buy Now Notification';
    $message = 'Someone clicked on the "Buy Now" button.';

    // Use appropriate headers for your email
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Send the email
    mail($to, $subject, $message, $headers);
}
?>
