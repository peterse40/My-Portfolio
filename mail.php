<?php 

$name = $_POST['name'];

$phone = $_POST['phone'];

$email = $_POST['email'];

$message = $_POST['message'];

$formcontent="From: $name \n Message: $message";

$recipient = "peterswebconsulting@gmail.com;

$subject = "Contact Form";

$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

echo "Thank You!" . " -" . "<a href='http://epeterswebdesign.com/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";

?>