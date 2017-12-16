
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

	<!--javascript-->
	<script type="text/javascript">
		
		function ajaxRequest(){
			document.getElementById("demo").innerHTML = "You clicked"; 
			var xmlhttpReq = new xmlhttpRequest();
			xmlhttpReq.onreadystatechange = function(){

				if(this.readState==4 && this.status == 200){
					document.getElementById("demo_div").innerHTML = this.responseXML; 
				}
				xmlhttpReq.open("POST" "<?php ACCOUNT_SERVICE ?>", true );
				xmlhttpReq.send();
			}
		}
	</script>

	<!--apply css-->
	<style type="text/css">


		.menu-list{
			background: #1c3a59;
			margin-bottom: 20px;	
		}

		.menu-list > a{
			background: white;
			text-align: center;
			margin: 1%;
		}

		#logout_btn{
			float: right;
		}
		#expense_form{
			width: 40%;
			background: #e8eaed;
			margin-left: 20px;

			max-width: 400px;
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


			<!--Form to recieve user's entries-->
				<form action="<?php echo EXPENSE_SERVICE ?>" method="POST" class="form-horizontal" id="expense_form">
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
				</form> <!--Form Ends-->
			<div id="demo_div">
				<button onclick="ajaxRequest()" >Change Data </button>

				<h1 id="demo">Right here guys</h1>
			</div>
	</div>

</body>

</html>
