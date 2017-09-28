<?php
include_once 'helpers.php';
use function cosc\verifyLoggedIn;

session_start();
verifyLoggedIn();

//probably need to handle post data here and set it on the session
?>


<!DOCTYPE html>
<html>

<head>
	<title>login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
	<h2>TO DO CREATE PROFILE FOR ROOT, DOCTOR, PAITIENT</h2>
	
</body>
