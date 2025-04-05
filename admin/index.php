<?php
	include('../includes/config.php');
	include('../includes/function.php');
	if (isset($_SESSION['IS_LOGIN'])) {
		redirect("main.php");
	} else {
		redirect("register.php");
	}

?>