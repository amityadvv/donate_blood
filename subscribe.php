<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $to = "2k23.cs2314011@gmail.com";
    $subject = "Newsletter Subscription";
    $message = "New subscription: " . $email;
    $headers = "From: no-reply@yourwebsite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Subscription successful!";
    } else {
        echo "Subscription failed!";
    }
}
?>
