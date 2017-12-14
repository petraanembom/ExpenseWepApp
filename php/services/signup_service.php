<?php

namespace webapp\service;

use \webapp\model;

require $_SERVER['DOCUMENT_ROOT']."/env_params/global_functions.php";
require $_SERVER['DOCUMENT_ROOT']."/env_params/php_path_constants.php";

require $_SERVER['DOCUMENT_ROOT'].USER_MODEL;

require 'db_services.php';

/*****************************************
* registerUserAccount(): This function register a new user account to the database
*						 when user sends signup request with the valid input. 
* param:
*  user - this is a user object with all required user 		information
*/
function registerUserAccount($user){
	$dbSource = new DataSource();
	//connect to database 
	$conn = $dbSource->connectToDb(); 
    
    //TODO:add date_join and date_of_birth to the table

    //prepare a query statement for writing user's information to data base
	$prepareStmt = $conn->prepare("INSERT INTO users (firstname, lastname, username, email, password ) VALUES (:firstname, :lastname, :username, :email, :password)");

	$prepareStmt->bindParam('firstname', $user->getFirstname());
	$prepareStmt->bindParam('lastname', $user->getLastname());
	$prepareStmt->bindParam('username', $user->getUsername());
	$prepareStmt->bindParam('email', $user->getEmail());
	$prepareStmt->bindParam('password', $user->getPassword());

	//execute query statment to create new user 
	$prepareStmt->execute();
	
	$dbSource->closeDb();

}//registerUserAccount() Ends 

//create new user object 
$user = model\User::createUser($_POST); 

//TODO: address notice printed after the execution of this method
//call the registerUserAccount function to write information to database
registerUserAccount($user);

//go to login page
echoRedirect(LOGIN_PAGE);

?>