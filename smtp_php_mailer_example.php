<?php

require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); 
$mail->CharSet="UTF-8";
$mail->Host = "mail.net"; // SMTP server
$mail->SMTPDebug = 0; 
$mail->Port = 465 ; //465 or 587
$mail->SMTPSecure = 'ssl';  
$mail->SMTPAuth = true; 
$mail->IsHTML(true);
$mail->Username = "mail@mail.com";
$mail->Password = "password";
$mail->setFrom('mail@mail.com', 'John Doe');
$mail->AddAddress("recipient@mail.com");
$mail->Subject = "Test";
$mail->Body = "hello";

/* $file_to_attach = 'mailtest/photo.jpg';
$mail->AddAttachment( $file_to_attach , 'photo.jpg' );
$file_to_attach = 'mailtest/photo2.jpg';
$mail->AddAttachment( $file_to_attach , 'photo2.jpg' ); */


if(!$mail->Send()) {
echo "Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}
