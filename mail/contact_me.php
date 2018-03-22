<?php

$name = $_POST['name'];
$email_address = $_POST['email'];
$attending = $_POST['attending'];
$meals = $_POST['meals'];
$message = $_POST['message'];

// Put your email id here. RSVP form will be sent to this email id.
$to = 'melissaagnone.careeradvantage@yahoo.com';

$email_subject = "Website Contact Form:  $name";

// Create email body
$email_body = "$name has Rsvp'd to your wedding!\n\n"."Here's what they have to say:\n\nName: $name\n\nEmail: $email_address\n\nNumber of Guests Attending: $attending\n\nMeals Chosen: $meals\n\nMessage:\n$message";

// Replace with email id you want the message to be from
$headers = "From: no-reply@DOMAIN-NAME.com\n";

$headers .= "Reply-To: $email_address";

if (mail($to,$email_subject,$email_body,$headers)) {
	echo 'success';
} else {
	echo "fail";
}

?>
