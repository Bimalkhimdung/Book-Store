<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_form = 'bimalkhimdung@gmail.com'; //Domain name

$email_subject =' New form submition';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject : $subject.\n".
               "User Message: $message .\n";


$to='bimalkhimdung@gmail.com'//email where you want to get message

$headers= "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

main($to,$email_subject,$email_body,$headers);

header("Location: contact.html");  //where do you want to redirect the user

?>
