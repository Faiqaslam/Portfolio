<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $mailto = "p190082@nu.edu.pk";  // Your email address (where you want to receive messages)

    // Getting customer data
    $name = $_POST['name'];
    $fromEmail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email body for you (received email)
    $emailContent = "Client Name: " . $name . "\n"
        . "Client Email: " . $fromEmail . "\n"
        . "Subject: " . $subject . "\n"
        . "Message: " . "\n" . $message;

    // Email headers
    $headers = "From: " . $fromEmail . "\r\n" .
        "Reply-To: " . $fromEmail . "\r\n" .
        "MIME-Version: 1.0\r\n" .
        "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email to your inbox
    $result = mail($mailto, $subject, $emailContent, $headers);

    // Check if the email was sent successfully
    if ($result) {
        $success = "Your message was sent successfully!";
    } else {
        $failed = "Sorry, your message was not sent. Please try again later.";
    }
}
?>
