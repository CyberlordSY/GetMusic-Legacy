<?php
include('../includes/function.php');
session_start();
session_destroy();
redirect("index.php");
?>