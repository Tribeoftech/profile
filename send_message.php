<?php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["name"])) {

    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Simple form validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill out all fields.";
        exit();
    }

    // Your email address
    $to = "gratefulgrowing333@gmail.com";

    // Email headers
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully. Thank you!";
    } else {
        echo "Error sending the message. Please try again later.";
    }
} else {

    // If not a POST request, display an error message
    echo "Invalid request.";
}

?>
