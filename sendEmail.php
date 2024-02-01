<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["SUBJECT"];
    $message = $_POST["message"];

    // Set email recipient
    $to = "annapurnaindiaofficial@gmail.com";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: annapurnaindiaofficial@gmail.com\n";
    $headers .= "Reply-To: annapurnaindiaofficial@gmail.com\n";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    // Redirect to error page if accessed directly
    header("Location: error.html");
}
?>
