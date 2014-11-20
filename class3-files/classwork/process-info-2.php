<?php 
	$fullname = $_GET['fullname']; 
	$email = $_GET['email'];
	$website = $_GET['website'];
	$comments = $_GET['comments'];
	
	echo 'The Full Name you entered was: ' . $fullname;
	echo 'The Email you entered was: ' . $email;
	echo 'The Web Site you entered was: ' . $website;
	echo 'You entered the following comments: ' . $comments;
?>