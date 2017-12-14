<?php
namespace webapp\model;
/**
* 
*/
class Expense
{
	private $expId;
	private $category;
	private $amount;
	private $dateOfEntry;
	private $dateIncurred;
	private $userId;
	private $householdId; 
	private $expenseType; //personal or household
	
	function __construct()
	{
		# code...
	}


	/**Define getter function */
	function getId(){
		return $this->expId; 
	}

	function getCategory(){
		return $this->category;
	}

	function getAmount(){
		return $this->amount; 
	}

	function getDateOfEntry(){
		return $this->dateOfEntry;
	}
	function getDateIncurred(){
		return $this->dateIncurred;
	}
	function getUserId(){
		return $this->userId;
	}
	function getHouseholdId(){
		return $this->householdId;
	}
	function getExpType(){
		return $this->expenseType; 
	}

	/**Define setter functions*/
	function setId($expId){
		 $this->expId = $expId; 
	}

	function setCategory($category){
		$this->category = $category;
	}

	function setAmount($amount){
		$this->amount = $amount; 
	}

	function setDateOfEntry($dateOfEntry){
		$this->dateOfEntry = $dateOfEntry; 
	}
	function setDateIncurred($dateIncurred){
		$this->dateIncurred = $dateIncurred; 
	}
	function setUserId($userId){
		$this->userId = $userId; 
	}
	function setHouseholdId($householdId){
		$this->householdId = $householdId; 
	}
	function setExpType($expenseType){
		$this->expenseType = $expenseType;  
	}

}
?>