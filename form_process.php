<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "lemoassistant@gmail.com";
$subject = "Nieuw message from cintact form"
	
mail ($to, $subject, $message, "From: " . $first_name . $last_name);
echo "The message has been sent"

?>