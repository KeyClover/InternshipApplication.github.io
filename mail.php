<?php


$first_name = $_POST['First Name'];
$last_name = $_POST['Last Name'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$headers = "From:" "<" 'SuvichakForWork45@outlook.com' ">\r\n" .
$recipient = $email;



mail($recipient,"We have received your application.","Thank you for your application. We have received it and our staff will respond soon. Please relax and enjoy your day.",$headers)
or die("Error!");

echo"message send";
?>



