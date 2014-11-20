<?php 
	$fullname = $_GET['fullname']; 
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	
	echo 'The Full Name you entered was: ' . $fullname;
	echo 'The Email you entered was: ' . $email;
?>