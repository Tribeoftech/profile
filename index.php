<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
</head>
<body>

<?php
if (isset($_GET['mailsend'])) {
    $status = $_GET['mailsend'];
    
    if ($status == "success") {
        echo "Thank you! Your message has been sent successfully.";
    } elseif ($status == "error") {
        echo "Error sending the message. Please try again later.";
    }
}
?>

<!-- Your other HTML content -->

<div class="right-contact">
    <form action="send_message.php" method="post" class="contact-form">
        <div class="input-control i-c-2">
            <input type="text" name="name" required placeholder="YOUR NAME">
            <input type="email" name="email" required placeholder="YOUR EMAIL">
        </div>
        <div class="input-control">
            <input type="text" name="subject" required placeholder="ENTER SUBJECT">
        </div>
        <div class="input-control">
            <textarea name="message" id="" cols="15" rows="8" placeholder="Message Here..."></textarea>
        </div>
        <div class="submit-btn">
            <button type="submit" name="submit" class="main-btn">
                <span class="btn-text">Send Message</span>
                <span class="btn-icon"><i class="fa-solid fa-envelope"></i></span>
            </button>
        </div>
    </form>
</div>

<!-- Include your JavaScript file here -->
<script src="app.js"></script>

</body>
</html>

