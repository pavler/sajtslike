<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "mail.yourdomain.com";
$mail->SMTPDebug = 2;
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->Username = "pavle.rakocevic.beosport@gmail.com";
$mail->Password = "beosport12";

$mail->SetFrom('user@gmail.com', 'Test');

$mail->Subject = "I hope this works!";

$mail->MsgHTML('Blah');

$address = "pavle.rakocevic.beosport@gmail.com";
$mail->AddAddress($address, "Test");

if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}