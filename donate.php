<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bloodType = $_POST['blood-type'];
    
    $to = "2k23.cs2314011@gmail.com";
    $subject = "New Blood Donation Request";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nBlood Type: $bloodType";
    $headers = "From: no-reply@quantcare.org";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your donation request!";
    } else {
        echo "Sorry, there was a problem. Please try again.";
    }
}
?>
