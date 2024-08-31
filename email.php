<?php
  // Form submission handler
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send email using PHPMailer or SMTP plugin
    $to = "recipient@example.com";
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Use PHPMailer or SMTP plugin to send email
    // ...
  }
?>