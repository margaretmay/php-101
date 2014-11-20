<?php 
	$firstname = htmlspecialchars($_GET['firstname'], ENT_QUOTES);
	$lastname = htmlspecialchars($_GET['lastname'], ENT_QUOTES);
	$email = filter_var($_GET['email'], FILTER_VALIDATE_EMAIL);
	$website = htmlspecialchars($_GET['website'], ENT_QUOTES);
	$comments = htmlspecialchars($_GET['comments'], ENT_QUOTES);
	
	echo 'The First Name you entered was: ' . $firstname;
	echo 'The Last Name you entered was: ' . $lastname;
	echo 'The Email you entered was: ' . $email;
	echo 'The Web Site you entered was: ' . $website;
	echo 'You entered the following comments: ' . $comments;
?>