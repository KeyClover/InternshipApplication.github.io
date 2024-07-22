<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



require "vendor/autoload.php";
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];


$mailheader = "From: Suvichak Jaroenpanit \r\n";
$recipient  = $email;

if(isset($_POST["send"])){
$mail = new PHPMailer(true);
$mail ->isSMTP();
$mail ->SMTPAuth = true;

$mail ->Host = "smtp.gmail.com";
$mail ->SMTPSecure = '';
$mail ->Port = 587;

$mail ->Username =" "; //Put your own gmail here
$mail ->Password =" "; //Put your own gmail application password here

$mail ->setFrom("suvichakkey45@gmail.com");

$mail->addAddress($_POST["email"]);

$mail->isHTML(true);

$mail->Body = 'We have received your application. 
Thank you for your application. 
We have received it and our staff will respond soon. Please relax and enjoy your day';

$mail->send(); 

}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Suvichak Jaroenpanit" />
    <title>Internship Submit Application Website</title>

    <link rel="stylesheet" href="style.css">
    

</head>

<body class="bg">

<div class="container">

    <h1>Thank you for your application</h1>

    
</div>



</body>

</html>




