<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $message = $_POST["message"];

    $to = "jonathansucre07@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $email_body = "Full Name: $full_name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone Number: $phone_number\n\n";
    $email_body .= "Message:\n$message";

    mail($to, $subject, $email_body, $headers);

    // You can add a thank you message or redirect the user to a thank you page.
    header("Location: thank_you.html");
    exit();
}
?>
