<?php
// contact.php – handles the form POST
$receiving_email_address = 'info@jh-carcleaning.be';
$success_url = "https://jh-carcleaning.be/thank-you.html";
$error_url   = "https://jh-carcleaning.be/error.html";

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? 'New message from website');
$message = trim($_POST['message'] ?? '');

if (empty($name) || empty($email) || empty($message)) {
    header("Location: $error_url");
    exit;
}

$headers = "From: $name <$email>\r\n" .
           "Reply-To: $email\r\n" .
           "Content-Type: text/plain; charset=UTF-8";

$body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

if (mail($receiving_email_address, $subject, $body, $headers)) {
    header("Location: $success_url");
    exit;
} else {
    header("Location: $error_url");
    exit;
}
