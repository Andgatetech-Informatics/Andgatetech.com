<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $content = htmlspecialchars($_POST["message"]);

    $toEmail = "andgate_hrteam@andgatetech.com";

    $message = "
    Name: $name

    Email: $email

    Subject: $subject

    Message:
    $content
    ";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8\r\n";
    $headers .= "From: Website Contact Form <noreply@yourdomain.com>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($toEmail, $subject, $message, $headers)) {
        echo "OK";
    } else {
        echo "FAIL";
    }

} else {
    echo "Method Not Allowed";
}
?>