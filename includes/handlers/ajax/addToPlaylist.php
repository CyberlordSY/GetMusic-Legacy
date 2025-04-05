<?php

include("../../config.php");

if (isset($_POST['playlistId']) && isset($_POST['songId'])) {
	$playlistId = $_POST['playlistId'];
	$songId = $_POST['songId'];

	$orderIdQuery = mysqli_query($con, "SELECT COALESCE(MAX(playlistOrder) + 1, 1) AS playlistOrder FROM playlistsongs WHERE playlistId='$playlistId'");
	$row = mysqli_fetch_array($orderIdQuery);
	$playlistOrder = $row['playlistOrder'];

	$query = mysqli_query($con, "INSERT INTO playlistsongs (songId, playlistId, playlistOrder) VALUES ('$songId', '$playlistId', '$playlistOrder')");

} else {
	echo "PlaylistId or songId was not passed into addToPlaylist.php";
}

?>