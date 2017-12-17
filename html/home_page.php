
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
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
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
			echo 'Hello '.$_SESSION["username"].'!'; 
			//print_r($_SESSION);
		}else{
			//go back to login page
			echoRedirect(LOGIN_PAGE);
		}//else if ends 
	?>

	<!--apply css-->
	<style type="text/css">


		.menu-list{
			background: #1c3a59;
			margin-bottom: 20px;	
		}

		.menu-list > a{
			background: white;
			text-align: center;
			margin-left: 1%;
			margin-right: 1%;
			margin-top: 2%;
		}

		#logout_btn{
			float: right;
		}
		#expense_form, #date_view {
			width: 90%;
			background: #e8eaed;
			margin-left: 20px;
		}
		#hidden_exp_form{
			visibility: collapse;
		}
		#side_menu{
			width: 40%;
			background: #e8eaed;
			margin: 1%;
			max-width: 400px;
		}

		#menu_display_body{
			background: #1c3a59;
		}
		.chartist{
			width: 90%;
		}

		#data_display_div, #data_display{
			background: white;
			margin-top: 1%;
			margin-left: 1%;
			margin-right: 1%;
		}

		#menu_display_body{

		}
		form div {
			margin-bottom: 10px; 
		}



	</style>

</head>

<!--HTML BODY-->
<body>
	<div >
		<div style="background: purple">

			<nav class="menu-list">
				<a href=<?php echo HOME_PAGE ?>  class="btn btn-link">HOME</a>
				<a href="" class="btn btn-link" >Household Expense</a>
				<a href="" class="btn btn-link">Personal Expense</a>
				<a href=<?php echo ACCOUNT_SERVICE ?> class="btn btn-link" >My Account</a>
			
				<a href=<?php echo LOGOUT_SERVICE ?> id="logout_btn" class="btn btn-link" >Logout</a>
				
			</nav>
			</div>
		<section id="menu_display_body" class="row">

			<div id="side_menu" class="col-md-1">

				<form action="<?php echo EXPENSE_SERVICE ?>" method="POST" class="form-horizontal" id="date_view">
						<div>
							<label for="exp-category"> Start Date: </label>
							<input  class="form-control"  type="Date" name="category" id="exp-category">
						</div>

						
						<div>
							<label for="end_date"> End Date: </label>
							<input class="form-control"  type="Date" name="to date" id="end_date"> 
						</div>
										
				</form> <!--Form Ends-->

			<!--Form to recieve user's entries-->
				<form action="<?php echo EXPENSE_SERVICE ?>" method="POST" class="form-horizontal" id="expense_form">

						<div>
							<input type="button" name="" value="New Expense" class="btn btn-primary" onclick="document.getElementById('hidden_exp_form').style.visibility='visible'">
						</div>

						<div id="hidden_exp_form">
							<div>
								<label for="exp-category"> Category: </label>
								<input  class="form-control"  type="text" name="category" id="exp-category">
							</div>

							
							<div>
								<label for="exp-item"> Item: </label>
								<input class="form-control"  type="text" name="item" id="exp-item"> 
							</div>


							<div >
								<label for="exp-value"> value: </label>
								<input  class="form-control" type="numeric" name="amount" id="exp-value">
							</div>

							<div>
								<label for="exp-date"> Date: </label>
								<input class="form-control"  type="date" name="dateIncurred" id="exp-date">
							</div>		

							<div>
								<label for="exp-type"> Expense Type: </label>
								<select class="form-control" id="choose_expense" name="type" id="exp-type">
									<option>Household Expense</option>
									<option>Personal Expense</option>
								</select>
							</div>											
							<div id="add_btn_div">
								<input class="btn btn-warning btn-md" type="reset" value="Clear Entry">

								<input style="float: right" class="btn btn-primary btn-md" type="submit" value="Add Expense">

							</div>
						</div>	
				</form> <!--Form Ends-->
			</div>
			
			<div id="data_display_div" class="col-md-3">
				<div class="chartist ct-chart ct-square"></div>
				<!--javascript-->
				<script type="text/javascript">
					var data = {
					  // A labels array that can contain any sort of values
					  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
					  // Our series array that contains series objects or in this case series data arrays
					  series: [
					    [5, 2, 4, 2, 0]
					  ]
					};

					// Create a new line chart object where as first parameter we pass in a selector
					// that is resolving to our chart container element. The Second parameter
					// is the actual data object.
					new Chartist.Line('.ct-chart', data);
				</script>
			</div>

			<div id="data_display" class="col-md-3">
				<div class="chartist cty-chart ct-square"></div>
				<!--javascript-->
				<script type="text/javascript">
					var data = {
					  // A labels array that can contain any sort of values
					  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
					  // Our series array that contains series objects or in this case series data arrays
					  series: [
					    [5, 2, 4, 2, 0]
					  ]
					};
					new Chartist.Bar('.cty-chart', data);
				</script>
			</div>


		</section>

	</div>

</body>

</html>
