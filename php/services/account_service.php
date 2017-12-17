<?php

namespace webapp\service;

require 'db_services.php';
class AccountService {


	/**
	* Authenticate client information 
	*/
	public static function validateClientUser($username, $password){

		$conn = $this->connectToDb(); 

		//TODO:Catch exceptional case were the QUERY fails 
		//$querryStmt = "SELECT username, password FROM users;";  

		//TODO: Write a client side script with javascript and a
		// server side script to validate the format of the input 
		// This is to prevent SQL injection attacks 
		
		$querryStmt = "SELECT username, password FROM user WHERE username='$username' AND password = '$password'"; 

		//check if connection is oppen
		if($conn != NULL) {
			$result = $conn->query($querryStmt);

			//check size of the return, if it is 1 then 
			//the authentication is valide, else authentication 
			//is not valid. 
			if($result->rowCount() == 1){
				
			  //TODO retrieve the login information and check
			  //if the username and password do match
			 return true;
			}

			/*foreach ($result = $conn->query($querryStmt) as $row){
				print_r($row);
			}*///foreach Ends 

			$this->closeDb();

		}//if Ends 

		return false; 
	}//validateClientUser() Ends


	/*****************************************************
	* registerUserAccount(): This function register a new user account to the database
	*						 when user sends signup request with the valid input. 
	* param:
	*  user - this is a user object with all required user 		information
	*/
	 public static function registerUserAccount($user){
		$dbSource = new DataSource();
		//connect to database 
		$conn = $dbSource->connectToDb(); 
	    
	    //TODO:add date_join and date_of_birth to the table

	    //prepare a query statement for writing user's information to data base
		$prepareStmt = $conn->prepare("INSERT INTO user (firstname, lastname, username, email, password ) VALUES (:firstname, :lastname, :username, :email, :password)");

		$prepareStmt->bindParam('firstname', $user->getFirstname());
		$prepareStmt->bindParam('lastname', $user->getLastname());
		$prepareStmt->bindParam('username', $user->getUsername());
		$prepareStmt->bindParam('email', $user->getEmail());
		$prepareStmt->bindParam('password', $user->getPassword());

		//execute query statment to create new user 
		$prepareStmt->execute();
		
		$dbSource->closeDb();

	}//registerUserAccount() Ends 


	public static function deleteAccount($username){

	}

	public static function joinHouseHold($householdId){

	}

	public static function getAccountInfo($username){
		
	}

	public static function changePassword($newPassword){

	}

	public static function changeUsername($newUsername){

	}


	/******************************************************
	*sendConfirmationEmail(): This function will be used to 
	*account confirmation email to users. 
	*/
	public static function sendConfirmationEmail($emailAddress)
	{

	}

	/**
	*loginWithFacebook(): This function logs in users using their facebook account. 
	*/
	public static function loginWithFacebook(){

	}


	/**
	*loginWithGoogle(): This function logs in users using their Google account. 
	*/
	public static function loginWithGoogle(){

	}



}
?>