<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "your@email.com"; // Replace with your email address
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email";
    $mailBody = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Message delivery failed.";
    }
}
?>
