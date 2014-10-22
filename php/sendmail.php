<?php

$email = "jitesh@320digital.com";
$subject = (empty($_POST['contact-subject'])) ? 'Website message' : $_POST['contact-subject'];

if ( isset($_POST["contact-name"]) && isset($_POST["contact-email"]) && isset($_POST["contact-message"]) ) {

	$to = $email;
	$subject = $subject;
	$message = $_POST["contact-message"];
	$from = $_POST["contact-email"];
	$headers = "From:" . $from;
	mail( $to, $subject, $message, $headers );	
	echo "Success";

} else {
	
	echo "POST request does not contain necessary data!";
	
}