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

	<style type="text/css">
		#sign_up_form{
			background: yellow;
			display: table;
		}

		#sign_up_fieldset{
			
		}
		#sign_up_fieldset p{
			display: table-row;
		}
		#sign_up_form input{
			display: table-cell;
			margin: 10px;
		}

	</style>

</head>

<!--HTML BODY-->
<body>


	<div>
		<div>

			<!--implement javascript to validate all form information-->
			<!--TODO: Enforce checks to make sure user fills in this form with the right and required information--> 
			<form id="sign_up_form" action=<?php echo SINGUP_SERVICE ?> method="post">

				<fieldset id="sign_up_fieldset">
					<legend> Create user account </legend>
					<p>
					<input type="text" name="firstname" placeholder="FIRST NAME"> 
					</p>

					<p>
						
						<input type="text" name="lastname" placeholder="LAST NAME"> 
					</p>

					<p>
						
					 	<input type="text" name="username" placeholder="USERNAME"> 
					 </p>

					<!--div>
						<input type="text" name="data_of_birth" placeholder="DATE OF BIRTH">
					</div-->
					
					<p>
						
						<input type="email" name="email" placeholder="EMAIL">
					</p>

					<p>
						
						<input type="password" name="password" placeholder="PASSWORD"> 
					</p>

					<p>
						
						<input type="password" name="re-password" placeholder="RE-PASSWORD">
					</p>

					<p>
						<input type="submit" value="Register">
						<input id="cancel_btn" type="button" value="cancel" onclick= "window.location.href='<?php echo INDEX_PAGE ?>' "> 
					</p>
				
			    </fieldset>
				
			</form>

		</div>
	</div>

</body>

</html>
