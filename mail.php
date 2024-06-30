<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require "vendor/autoload.php";
require 'vendor/phpmailer/phpmailer/scr/Exception.php';
require 'vendor/phpmailer/phpmailer/scr/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/scr/SMTP.php';



if(isset($_POST["send"])){
$mail = new PHPMailer(true);
$mail ->isSMTP();
$mail ->SMTPAuth = true;

$mail ->Host = "smtp.gmail.com";
$mail ->SMTPSecure = 'ssl';
$mail ->Port = 465;

$mail ->Username ="suvichakkey45@gmail.com";
$mail ->Password ="nrjb qjqe drjc zfbj";

$mail ->setFrom("suvichakkey45@gmail.com");

$mail->addAddress($_POST["email"]);

$mail->isHTML(true);

$mail->Body = 'We have received your application.","Thank you for your application. We have received it and our staff will respond soon. Please relax and enjoy your day';

$mail->send(); }



