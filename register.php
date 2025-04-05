<?php

	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if (isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to GetMusic!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Discover music you'll fall in love with ; Create your own playlist">
	<meta name="keywords" content="Music,get music,download,download music,downlaod music for free,play music,play music for free,Siddharth music">
	<meta name="author" content="Siddharth Yadav">
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	<link rel = "icon" href ="assets/images/logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
	<?php 
		if (isset($_POST['registerButton'])) {
			echo '<script>
					$(document).ready(function() {
						$("#loginForm").hide();
						$("#registerForm").show();
					});
				</script>';
		} else {
			echo '<script>
					$(document).ready(function() {
						$("#loginForm").show();
						$("#registerForm").hide();
					});
				</script>';
		}
	?>

	<div id="background">
		<div id="loginContainer">
			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST">
					<h2>Login to your accoaunt</h2>

					<p>
						<?php echo $account -> getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="Enter the username" value="<?php getInputValue('loginUsername'); ?>"required>	
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="Enter the password" required>	
					</p>

					<button type="submit" name="loginButton">LOG IN</button>

					<div class="hasAccountText">
						<span id="hideLogin">Don't have any account yet? Signup here.</span>
					</div>
					
				</form>


				<form id="registerForm" action="register.php" method="POST">
					<h2>Create your free account</h2>

					<p>
						<?php echo $account -> getError(Constants::$userNameCharacters); ?>
						<?php echo $account -> getError(Constants::$userNameTaken); ?>
						<label for="username">Username <strong style="color: red;">(Space bar will not be taken)</strong></label>
						<input id="username" name="username" type="text" placeholder="Enter the username (Don't put space bar)" value="<?php getInputValue('username'); ?>" required>	
					</p>

					<p>
						<?php echo $account -> getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">First Name</label>
						<input id="firstName" name="firstName" type="text" placeholder="Enter the firstname" value="<?php getInputValue('firstName'); ?>" required>	
					</p>

					<p>
						<?php echo $account -> getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Last Name</label>
						<input id="lastName" name="lastName" type="text" placeholder="Enter the lastname" value="<?php getInputValue('lastName'); ?>" required>	
					</p>

					<p>
						<?php echo $account -> getError(Constants::$emailInvalid); ?>
						<?php echo $account -> getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account -> getError(Constants::$emailTaken); ?>
						<label for="email">Email</label>
						<input id="email" name="email" type="email" placeholder="Enter the email" value="<?php getInputValue('email'); ?>" required>	
					</p>

					<p>
						<label for="emailConfirm">Confirm Email</label>
						<input id="emailConfirm" name="emailConfirm" type="email" placeholder="Enter the email" value="<?php getInputValue('emailConfirm'); ?>" required>	
					</p>

					<p>
						<?php echo $account -> getError(Constants::$passwordsDoNotMatch); ?>
						<?php echo $account -> getError(Constants::$passwordNotAlphanumeric); ?>
						<?php echo $account -> getError(Constants::$passwordCharacters); ?>
						<label for="password">Password</label>
						<input id="password" name="password" type="password" placeholder="Enter the password" required>	
					</p>

					<p>
						<label for="passwordConfirm">Confirm Password</label>
						<input id="passwordConfirm" name="passwordConfirm" type="password" placeholder="Enter the confirm password" required>	
					</p>

					<button type="submit" name="registerButton">SIGN UP</button>

					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? Login here.</span>
					</div>
					
				</form>

			</div>

			<div id="loginText">
				<h1>Get great music, right now</h1>
				<h2>Listen to lots of songs for free</h2>
				<ul>
					<li>Discover music you'll fall in love with</li>
					<li>Create your own playlist</li>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>