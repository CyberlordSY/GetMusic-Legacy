<?php session_start();

	ob_start();

	$timezone = date_default_timezone_set("Asia/Calcutta"); 

	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$server = "localhost";
	$username = "root";
	$password = "CyberLordSY";
	$db = "getmusic";

	$con = new mysqli($server, $username, $password, $db);
	$con = mysqli_connect($server, $username, $password, $db);

	if (mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}

?>
