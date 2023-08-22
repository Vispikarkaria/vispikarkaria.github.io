<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];

    // Recipient email address
    $to = "vispikarkaria127@gmail.com";

    // Email subject
    $subject = "New Comment on Your Blog";

    // Email content
    $message = "
    <html>
    <head>
        <title>New Comment</title>
    </head>
    <body>
        <p>You have received a new comment:</p>
        <p>" . $comment . "</p>
    </body>
    </html>
    ";

    // Headers for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: <webmaster@yourdomain.com>' . "\r\n";

    // Send email
    if(mail($to, $subject, $message, $headers)){
        echo "Email sent successfully.";
    } else{
        echo "Failed to send email.";
    }
}
?>
