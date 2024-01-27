<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email']; // Corrected from 'mail' to 'email'
    $message = $_POST['message'];

    $mailTo = "gratefulgrowing333@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    exit(); // Ensure the script stops execution after the redirect
}

// If the script reaches here, it means the form wasn't submitted correctly
header("Location: index.php?mailsend=error");
exit();

?>
