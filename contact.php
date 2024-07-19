<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "2k23.cs2314011@gmail.com";
    $subject = "Contact Us Message";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: no-reply@quantcare.org";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent!";
    } else {
        echo "Sorry, there was a problem. Please try again.";
    }
}
?>
