<?php
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent=" Message: $message";
	$recipient = "vuminhluan97@gmail.com";
	$subject = "Contact Form";
	$mailheader = "From: $email";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header('Location: index.php');
?>