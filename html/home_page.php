
<?php
	/*
	*TODO: Populate the homepage with user specific information this include:
	* user salutation: "e.g Welcome user"
	* person expense information (table) 
	* household expense information (table) 
	* An Expense Entry form
	*/
	session_start();
?>

<!DOCTYPE html>
<html>
<!--HTML head --> 
<head>
	<title>home page</title>

	<!--
		*specify all required dependencies
	    *check if user was authenticated
	    *initialize all user information -->
	<?php

		# script requirements 
		require $_SERVER['DOCUMENT_ROOT']."/env_params/php_path_constants.php";

		require $_SERVER['DOCUMENT_ROOT']."/env_params/global_functions.php";

		// Check if SESSION has a valid username 
		// before displaying the content of this page 
		// TODO: Compare the session username with the login
		// 		 username, to make sure user went throught the 
		// 		 authentication procedure. 
		if(array_key_exists("username", $_SESSION) == true){
			//echo $_SESSION["username"]; 
			print_r($_SESSION);
		}else{
			//go back to login page
			echoRedirect(LOGIN_PAGE);
		}//else if ends 
	?>
</head>

<!--HTML BODY-->
<body>
	<div>
		<div>
			<a href=<?php echo P_EXPENSE_SERVICE ?> >HOME</a>
			<a href=<?php echo P_EXPENSE_SERVICE ?> >Personal Expense</a>
			<a href=<?php echo H_EXPENSE_SERVICE ?> >Household Expense</a>
			<a href=<?php echo ACCOUNT_SERVICE ?> >My Account</a>
			<a href=<?php echo LOGOUT_SERVICE ?> >Logout</a>
			
		</div>
	</div>

</body>

</html>
