<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name-id"];
    $email = $_POST["email-id"];
    $message = $_POST["message"];

    // Recipient email address
    $to = "walidhomsi50@gmail.com";

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
   
    $email_content .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\n";

    // Send email
    $mail_success = mail($to, $subject, $email_content, $headers);

    if ($mail_success) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again.";
    }
} else {
    // If not a POST request, redirect to the form page
    header("Location: index.html");
}
?>