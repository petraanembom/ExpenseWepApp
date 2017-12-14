<?php
namespace webapp\model;

/**
* 
*/
class User
{
	private $username;
	private $lastname;
	private $firstname;
	private $email;
	private $password;
	private $houseId;
	private $useID;
	//private $dateOfBirth; 
	
	function __construct()
	{
		# code...
	}

	/**********************************************************
	* createUser() is a factory function for creating new user 
	* 				with default attribute passed to its parameters.
	* parameter:
	* $arrayOfuserAttributes: This is an associated array containing 
	* 							user attributes in key-value pair. Where the key is the name 
	* 							of the attribute, which is thesame as the variable . 
	*/
	public static function createUser($arrayOfuserAttributes){
		//initialize user object 
		$user = new User();

		$user->setFirstname($arrayOfuserAttributes['firstname']);
		$user->setLastname($arrayOfuserAttributes['lastname']);
		$user->setUsername($arrayOfuserAttributes['username']);
		//$user->setDateOfBirth($arrayOfuserAttributes['data_of_birth']);
		$user->setEmail($arrayOfuserAttributes['email']);
		$user->setPassword($arrayOfuserAttributes['password']); //javascript will implement password authentication protocols
		return $user; 
	}


	/********************************************************/
	/***********************Define setters********************/
	/********************************************************/
	function getUsername(){
		return $this->username;
	}

	function getLastname(){
		return $this->lastname;
	}
	function getFirstname(){
		return $this->firstname;
	}

	function getPassword(){
		return $this->password;
	}

	function getEmail(){
		return $this->email;
	}
	function getHouseID(){
		return $this->houseId; 
	}

	function getUserId(){
		return $this->userId;
	}

	/*function getDateOfBirth(){
		return $this->dateOfBirth;
	}*/

	/*******************************************************/
	/**Define setter function*/
	/*******************************************************/
	function setUsername($username){
		$this->username = $username;
	}

	function setLastname($lastname){
		$this->lastname = $lastname;
	}
	function setFirstname($firstname){
		$this->firstname = $firstname;
	}

	function setEmail($email){
		$this->email = $email;
	}
	function setHouseID($houseId){
		 $this->houseId = $houseId; 
	}
	function setPassword($password){
		 $this->password = $password; 
	}
	function setUserId($userId){
		$this->userId =  $userId;
	}
	/*function setDateOfBirth( $dateOfBirth){
		$this->dateOfBirth = $dateOfBirth;
	}*/
}//user class ends 

?>