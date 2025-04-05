<?php

include("includes/config.php");
include("includes/classes/User.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");
include("includes/classes/Playlist.php");

// session_destroy(); //LOGOUT

if (isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
	$username = $userLoggedIn->getUsername();
	echo "<script>userLoggedIn = '$username';</script>";
} else {
	header("Location: register.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to GetMusic</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Discover music you'll fall in love with ; Create your own playlist">
	<meta name="keywords" content="Music,get music,download,download music,downlaod music for free,play music,play music for free,Siddharth music">
	<meta name="author" content="Siddharth Yadav">
	<link rel = "icon" href ="assets/images/logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>
<body>

	<div id="mainContainer">
		<div id="topContainer">
			
			<?php include("includes/navBarContainer.php") ?>

			<div id="mainViewContainer">
				
				<div id="mainContent">