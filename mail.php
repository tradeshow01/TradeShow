<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


$phpmailer = new PHPMailer(true);

try {
    //Server settings
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '678669ad0bc4c0';
    $phpmailer->Password = 'd9066a4d430170';
    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $phpmailer->setFrom('noreply@tradeshow.com', 'Website');
    $phpmailer->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    //Content
    $phpmailer->isHTML(true);                                  //Set email format to HTML
    $phpmailer->Subject = 'Here is the subject';
    $phpmailer->Body    = 'This is the HTML message body <b>in bold!</b>';

    $phpmailer->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
}
