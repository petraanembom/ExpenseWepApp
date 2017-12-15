

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

	<style type="text/css">
		section{
			background: red;
			margin: 0, auto; 
		}
		.login_div{
			background: red;
			margin-left: 30%;
			margin-right: 30%;
		}


		#login_form{
			background: yellow;
			display: table;
			margin-top: 30%;
		}

		#login_fieldset p  {

			display: table-row;	
		}

		#login_fieldset label, 
		#login_fieldset input{
			display: table-cell;
			margin: 10px;
		}

	</style>

</head>


<body>
<!--Application Menu-->

<div>
	
</div>

<!--LOGIN INPUT -->
<section >
	<div class=login_div>
		<form id="login_form" action = <?php echo LOGIN_SERVICE ?> method="POST">
			<fieldset id="login_fieldset">
				
				<legend> Account Login </legend>

				<p>
					<label for="username"> Username: </label>
					<input type="text" name="username" id="username">
				</p>

				<p>
					<label for="password">Password</label>
					<input type="password" name="password" id="password">
				</p>

				<p>
					<input value="login" type="submit">
				</p>

			</fieldset>
			
			<!--link to signup page --> 
			<p>Don't have an account? <a href="<?php echo SIGNUP_PAGE ?>">create account</a></p>
		</form>	
	</div>

</section>

</body>
</html>
