<?php


$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


$phpmailer = new PHPMailer(true);

try {
    //Server settings
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 587;
    $phpmailer->Username = 'ttradeshow@gmail.com';
    $phpmailer->Password = 'tyxtoapjgwxotnjq';
    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $phpmailer->addAddress('ttradeshow@gmail.com', 'Website');
    // $phpmailer->addAddress('joe@example.net', 'Joe User');
    //Content
    $phpmailer->isHTML(true);                                  //Set email format to HTML
    $phpmailer->Subject = 'TradeShow Contact Form';
    $Body = '';
    $Body .= 'Name:' . $name;
    $Body  .= '<br>Email:' . $email;
    $Body  .= '<br>Mobile:' . $number;
    $Body  .= '<br>Message:' . $message;
    $phpmailer->Body = $Body;


    $phpmailer->send();
    header('Location:contact.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
}
