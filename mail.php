<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require "vendor/autoload.php";

$mail = new PHPMailer(true);

$first_name = $_POST["First Name"];
$last_name = $_POST["Last Name"];
$phone_no = $_POST["phone_no"];



try {
$mail ->isSMTP();
$mail ->SMTPAuth = true;

$mail ->Host = "smtp.gmail.com";
$mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail ->Port = 465;

$mail ->Username ="suvichakkey45@gmail.com";
$mail ->Password ="nrjb qjqe drjc zfbj";

$mail ->setFrom('suvichakkey45@gmail.com', 'Auto Reply');

$mail->addAddress($_POST["email"]);

$mail->Body = "We have received your application.","Thank you for your application. We have received it and our staff will respond soon. Please relax and enjoy your day";

$mail->send();

echo 'We have received your application';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>



