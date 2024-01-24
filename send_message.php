<?php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Your email address
    $to = "gratefulgrowing333@gmail.com";

    // Email headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to a thank you page or display a success message
        header("Location: thank_you.html");
        exit();
    } else {
        // Redirect to an error page or display an error message
        header("Location: error.html");
        exit();
    }
} else {
    // Redirect to an error page or display an error message
    header("Location: error.html");
    exit();
}

?>
