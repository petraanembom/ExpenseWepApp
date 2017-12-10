<?php

namespace webapp\service;

//scripts requirements 
require $_SERVER['DOCUMENT_ROOT']."/env_params/php_path_constants.php";

require $_SERVER['DOCUMENT_ROOT']."/env_params/global_functions.php";

require "db_services.php";

//retreive user login information 
$username = $_GET["username"];
$password = $_GET["password"];

/*Function to authenticate user's credentials*/
function authCredential($username, $password){
	 
	$datasource = new DataSource();
	$datasource->connectToDb();
    $isValid = $datasource->validateClientUser($username, $password);

	if($isValid == true) { 
		//go to hompage 
      	//TODO:Catch Exceptions as page might not exist
      	//httpResponse Class not found error was experience here 
		//httpResponse::redirect(SINGUP_SERVICE ,array("name" => "value"), true, HTTP_REDIRECT_PERM);
		echo "logging in...";

		//TODO: redirect using echo for now.
		//the plan is to use the http package functions 	
		echoRedirect(HOME_PAGE);

	}else {
		//print error
		echo "Invalid username or password";
	}//if-Ends 

}//setAuth() Ends 


//authenticate user name and password 
authCredential($username, $password);

	
?>