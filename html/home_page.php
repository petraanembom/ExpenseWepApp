<!DOCTYPE html>
<html>
<!--HTML head --> 
<head>
	<title>sign up</title>

	<!--
		*specify all required dependencies
	    *check if user was authenticated
	    *initialize all user information -->
	<?php


		require $_SERVER['DOCUMENT_ROOT']."/env_params/php_path_constants.php";
		$AuthCompleted = null;

		//go back to the login page
		if($AuthCompleted == null){
			echo "You are a hacker";
		}//if Ends 



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
