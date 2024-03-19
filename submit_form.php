<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'sam.d.a.mccabe@outlook.com'; // Enter your email address here

    $subject = 'New Message from Your Minecraft Server Contact Form';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo '<script>alert("Message sent successfully!");</script>';
    } else {
        echo '<script>alert("Error sending message. Please try again later.");</script>';
    }
}
?>
