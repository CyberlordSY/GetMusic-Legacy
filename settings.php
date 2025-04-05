<?php

include("includes/includedFiles.php");

?>

<div class="entityInfo">

	<div class="centerSection">
		<div class="userInfo">
			<h1><?php echo $userLoggedIn->getFirstAndLastName(); ?></h1>
		</div>
	</div>

	<div class="buttonItems">
		<button class="button" onclick="openPage('updateDetails.php')">USER DETAILS</button>
		<?php 
			$userLogged = $userLoggedIn->getFirstAndLastName();
			$ro = explode(" ", $userLogged);
			$f = $ro['0'];
			$l = $ro['1'];
			$sql = "SELECT * from users WHERE firstname='$f' and lastname='$l'";
			$res = mysqli_query($con,$sql);
			$row = mysqli_fetch_assoc($res);
			$ad = $row['admin'];
			if ($ad == '1') { ?>
				<button class='button' onclick='window.open("admin")'>ADMIN</button>
				<?php 
			}
		?>
		<button class="button" onclick="logout()">LOGOUT</button>
	</div>
	
</div>