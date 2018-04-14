<?php
	if(isset($_POST["submit"]))
	{

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_subject = strip_tags(htmlspecialchars($_POST['subject']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
  
// Create the email and send the message
$to = 'joehbenti@gmail.com'; 
$email_subject = "Website Contact Form:  $email_subject";
$email_body = "Name: $name\n\nEmail: $email_address\n\nSubject:\n$email_subject\n\nMessage:\n$message";
$headers = "From: $email_address\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
	}
?>