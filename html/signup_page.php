<!DOCTYPE html>
<html>
<!--HTML head --> 
<head>
	<title>sign up</title>

	<!-- Specify required php scrips-->
	<?php
	 //TODO:make sure file is not being used (ie opened) by another 
	 //process or page
	 //define("SINGUP_SERVICE" , "/php/services/signup_service.php");

	 //Entering the FQN directly, as a string, cause and error. This was resloved by using the $_SERVER['DOCUMENT_ROOT']
     require $_SERVER['DOCUMENT_ROOT']."/env_params/php_path_constants.php";
	?>

</head>

<!--HTML BODY-->
<body>

	<div>
		<div>

			 <h3> Enter all fields to create and account </h3>

			<!--implement javascript to validate all form information-->
			<form action=<?php echo SINGUP_SERVICE ?> type="GET">
				<div>
				<input type="text" name="firstname" placeholder="FIRST NAME"> 
				</div>

				<div>
					<input type="text" name="lastname" placeholder="LAST NAME"> 
				</div>

				<div>
				 	<input type="text" name="username" placeholder="USERNAME"> 
				 </div>

				<div>
					<input type="text" name="data_of_birth" placeholder="DATE OF BIRTH">
				</div>
				
				<div>
					<input type="email" name="email" placeholder="EMAIL">
				</div>

				<div>
					<input type="password" name="password" placeholder="PASSWORD"> 
				</div>

				<div>
					<input type="password" name="password" placeholder="RE-PASSWORD">
				</div>

				<div>
					<input type="submit" name="REGISTER">
				</div>
				
			</form>

			<!--link to cancel this process of account creation
			 *When clicked a pop-out window should be displayed
			 * asking the user to confirm the cancel process-->
			<a href=<?php echo INDEX_PAGE ?> > Cancel </a>

		</div>
	</div>

</body>

</html>
