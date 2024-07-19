<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
    $to = "2k23.cs2314011@gmail.com";
    $subject = "New Newsletter Subscription";
    $message = "New subscriber email: $email";
    $headers = "From: no-reply@quantcare.org";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for subscribing!";
    } else {
        echo "Sorry, there was a problem. Please try again.";
    }
}
?>
