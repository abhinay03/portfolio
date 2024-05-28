<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Construct email message
    $to = "sambheraoabhinay.work@gmail.com";
    $subject = "Message from Contact Form";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
