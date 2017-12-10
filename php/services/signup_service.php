<?php

namespace webapp\service;

require 'db_services.php';

$username = $_GET["username"];
$password = $_GET["password"];

/*Function to authenticate user's credentials*/
function authCredential($username, $password){
	 
	$datasource = new DataSource();
	$datasource->connectToDb();
    $isValid = $datasource->validateClientUser($username, $password);

	if($isValid == true) { 
		//go to hompage 

		echo "<br> <h1>Welcome Home $username <h1>";
	}else {
		//print error
		echo "Invalid username or password";
	}//if-Ends 

}//setAuth() Ends 


//authenticate user name and password 
authCredential($username, $password);

	
?>