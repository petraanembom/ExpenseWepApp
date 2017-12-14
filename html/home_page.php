
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
			echo $_SESSION["username"]; 
			//print_r($_SESSION);
		}else{
			//go back to login page
			echoRedirect(LOGIN_PAGE);
		}//else if ends 
	?>

	<!--apply css-->
	<style type="text/css">
		.menu-list{
			background: green;
			padding: 2%;
			margin-bottom: 20px;	
		}

		.menu-list > a{
			background: yellow;
			text-align: center;
			margin: 1%;
			padding: 1%;
		}
		/*Move the logout menu item far right*/
		/*#logout-menu-item{
			margin-left: 50%; 
		}*/

		/*style the expense-entry form*/
		form{
			display: table;
			margin: 0 auto;
		}

		form div {
			display: table-row;
		}

		form label, form input {
			display: table-cell;
			margin-bottom: 10px; 
		}

	</style>

</head>

<!--HTML BODY-->
<body>
	<div style="background: pink">
		<div style="background: purple">

			<nav class="menu-list">
				<a href=<?php echo HOME_PAGE ?> >HOME</a>
				<a href=<?php echo H_EXPENSE_SERVICE ?> >Household Expense</a>
				<a href=<?php echo P_EXPENSE_SERVICE ?> >Personal Expense</a>
				<a href=<?php echo ACCOUNT_SERVICE ?> >My Account</a>
				<a href=<?php echo LOGOUT_SERVICE ?> >Logout</a>
				
			</nav>
			
		</div>


		<div style="background: orange">
			<!--Form to recieve user's entries-->
			<div class="exp-form-div">
				<form action="" method="GET">
					<fieldset>
						<legend>Expense data:</legend>
						<div>
							<label for="exp-category"> Category: </label>
							<input type="text" name="category" id="exp-category">
						</div>

						
						<div>
							<label for="exp-item"> Item: </label>
							<input type="text" name="item" id="exp-item"> 
						</div>


						<div>
							<label for="exp-value"> value: </label>
							<input type="numeric" name="value" id="exp-value">
						</div>

						<div>
							<label for="exp-date"> Date: </label>
							<input type="date" name="datetime" id="exp-date">
						</div>		

						<div>
							<label for="exp-type"> Expense Type: </label>
							<select id="choose_expense" name="expense_type" id="exp-type">
								<option>Household Expense</option>
								<option>Personal Expense</option>
							</select>
						</div>											
						<div>
							<input type="submit" name="Add Expense">
						</div>	

					</fieldset>
					
				</form> <!--Form Ends-->
			</div> <!--div > Form Ends-->

		</div>
	</div>

</body>

</html>
