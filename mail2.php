<?php

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];


$mailheader = "From: Suvichak Jaroenpanit \r\n";
$recipient  = $email;


mail($recipient,"We have successfully received your Internship application","We have successfully received your Internship application",$mailheader);

echo"We have successfully received your Internship application";

?>