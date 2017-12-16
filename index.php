

<?php
  session_start()
 ?>

<!DOCTYPE html>
<html>
<head>

	<title>welcome</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Specify required php scrips-->
	<?php
		require $_SERVER['DOCUMENT_ROOT']."/env_params/php_path_constants.php";

		//By removing session variable, user will be forced to sign in with the username and password
		//remove session variable
		session_unset();
		session_destroy();
	?>

	<style type="text/css">
		body{
			background: #1c3a59;
		}
		.login_div{

			background: red;
			display: flex;   
		}
		#login_div{
			position: absolute;
			top: 20%;
			left: 15%;
		
			background: #ffffff;
			display: table;
			height: 60%;
			width: 60%;

			max-height: 550px;
			max-width: 450px;

			padding: 10px;
			
		}

		#form_div div{
			margin-bottom: 10%;
		}
		#facebook_gmail_div{
			margin-left: 1%;
			margin-right: 1%;
			margin-bottom: 10%;
			margin-top: 10%;
		}



	</style>

</head>


<body>
<!--Application Menu-->

<div>
	
</div>

<!--LOGIN INPUT -->
	<div id=login_div>

		<div id="facebook_gmail_div" class="row">
			<input class="btn btn-primary" value="Gmail" type="" style="background: #ed4040">
			<input class="btn btn-primary" value=" Facebook" type="" style="background: #427af4;float: right; ">
		</div>			
				
		<div id="form_div">
		   <form class="form-horizontal" id="login_form" action = <?php echo LOGIN_SERVICE ?> method="POST">
				

				<div>
					<label for="username"> Username: </label>
					<input class="form-control" type="text" name="username" id="username">
				</div>

				<div>
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password" id="password">
				</div>

				<div class="checkbox">
					<label for="checkbox">
					<input type="checkbox" name="checkbox" id="checkbox"> 
					Remember me</label>

				</div>

				<div>
					<input class="btn btn-primary btn-block" value="login" type="submit">

				</div>
			

			<!--link to signup page --> 
			<div>Don't have an account? <a href="<?php echo SIGNUP_PAGE ?>">create account</a>
			</div>
		</form>	

	</div>


	</div>
</body>
</html>
