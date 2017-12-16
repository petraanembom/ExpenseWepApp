<?php //do not forget to enclose php content in <?php

namespace webapp\service;

class DataSource{

	private $serverName = "localhost";
	private $dbUsername = "root";
	private $dbPassword= "";
	private $dbConn = NULL;
	private static $datasource = NULL; 
	private $database = "webapp";

	//no argument constructor 
	function  __construct(){

	}//constructor Ends 

   /***************************************************
   Connect to MYSQL database 
   */
	public function connectToDb(){

		//try to connect to database, and return NULL if connection fails.
		try{
		  $conn = new \PDO( 'mysql:host=localhost;dbname=webapp',"root","");
		  $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		}catch(\PDOException $ex){
			echo "Database connection failed".$e->getMessag(); 
			return NULL; 
		}//try-catch ends 

		return $conn; 
	}//connectToDb() Ends 

	/**************************************
	* close database connection 
	*/
	public function closeDb(){
		$dbConn = null;
	}

	/**
	* Authenticate client information 
	*/
	public function validateClientUser($username, $password){

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



	/***********************************************
	* Function to querry from data base 
	*/
	public function execQuerry($querryStmt){

	}//execQuerry() Ends 

}//DataSource class 

?>