<!DOCTYPE html>
<html>
<!--HTML head --> 
<head>
	<title>sign up</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script type="text/javascript" src="../js/AccountService.js"></script>

	<!-- Specify required php scrips-->
	<?php
	 //TODO:make sure file is not being used (ie opened) by another 
	 //process or page
	 //define("SINGUP_SERVICE" , "/php/services/signup_service.php");

	 //Entering the FQN directly, as a string, cause and error. This was resloved by using the $_SERVER['DOCUMENT_ROOT']
     require $_SERVER['DOCUMENT_ROOT']."/env_params/php_path_constants.php";
	?>

	<style type="text/css">
		body{
			background: #1c3a59;
		}
		#form_div{

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

		#sign_up_fieldset{
			
		}

		#sign_up_form div{
			margin: 10px;
		}

	</style>

</head>

<!--HTML BODY-->
<body>


	<div>
		<div id="form_div">
			<!--implement javascript to validate all form information-->
			<!--TODO: Enforce checks to make sure user fills in this form with the right and required information--> 
			<form id="sign_up_form" action=<?php echo SINGUP_SERVICE ?> method="post">

					<div>
					<label> Firstname </label>
					<input type="text" name="firstname" placeholder="FIRST NAME" 
						   class="form-control" id="firstname">

					</div>

					<div>

						<label> Lastname </label>
						<input type="text" name="lastname" placeholder="LAST NAME" 
							   class="form-control" id="lastname"> 
					</div>

					<div>
						<label> Username </label>
					 	<input type="text" name="username" placeholder="USERNAME" 
					 		   class="form-control" id="username" > 
					 </div>

					<!--div>
						<input type="text" name="data_of_birth" placeholder="DATE OF BIRTH">
					</div-->
					
					<div>
						<label> Email </label>
						<input type="email" name="email" placeholder="EMAIL" 
								class="form-control" id="email">
					</div>

					<div>
						<label> Password </label>
						<input type="password" name="password" placeholder="PASSWORD" class="form-control" id="password"> 
					</div>

					<div>
						<label> Re-password </label>
						<input type="password" name="re-password" placeholder="RE-PASSWORD" 
							class="form-control" id="re_password" >
					</div>

					<div>
						
						<input type="submit" value="Register" class="btn btn-primary btn-block">
					</div>

					<div>
						<a href='<?php echo INDEX_PAGE ?>' "> cancel </a>
					</div>
					
					<div id="msg_div"> </div>		
			</form>
				
	</div>

</body>

</html>
