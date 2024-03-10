<?php

$ownermail 	= 	'nitinj025@gmail.com';
$from 		= 	$_POST['email'];
$message 	= 	$_POST['message'];
$name		= 	$_POST['name'];
$subject 	= 	$name.' Sent a message from NitinJains.com';


mail($ownermail, $subject, $message, "From: $name <$from>\r\n");



// mail to sender

$to = $from;
$message = 'You just sent Nitin Jain an e-mail';
$subject = 'Mail Sent confirmation';

mail($to, $subject, $message, "From: $name <$ownermail>\r\n");

header('Location: http://www.iamnitinjain.com');