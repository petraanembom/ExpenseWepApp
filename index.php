

<?php
  session_start()
 ?>

<!DOCTYPE html>
<html>
<head>

	<title>welcome</title>

	<!-- Specify required php scrips-->
	<?php
		require $_SERVER['DOCUMENT_ROOT']."/env_params/php_path_constants.php";

		//By removing session variable, user will be forced to sign in with the username and password
		//remove session variable
		session_unset();
		session_destroy();
	?>

</head>

<body>
<!--Application Menu-->
<div>
	
</div>

<!--LOGIN INPUT -->
<div>
	<div>
		<form action = <?php echo LOGIN_SERVICE ?> method="POST">
			<div>
				<input type="text" name="username" placeholder="USERNAME">
			</div>

			<div>
				<input type="password" name="password" placeholder="PASSWORD">
			</div>

			<div>
				<input value="login" type="submit">
			</div>

			<div>
				<!--link to signup page --> 
				<a href="<?php echo SIGNUP_PAGE ?>">create account</a>
			</div>

		</form>

	
	</div>
</div>

</body>
</html>
