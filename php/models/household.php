<?php
namespace webapp\model;
/**
* 
*/
class household
{
	private $houseId;
	private $dateCreated;
	private $name;
	private $manager; 

	function __construct()
	{
		# code...
	}

	/**Define getters*/ 

	function getHouseId(){
		return $this->houseId;
	}

	function getDateCreated(){
		return $this->dateCreated;
	}
	function getName(){
		return $this->name; 
	}

	function getManager(){
		return $this->manager;
	}

	/**Define setter functions*/
	function setHouseId($houseId){
		$this->houseId = $houseId;
	}
	function setDateCreated($dateCreated){
		$this->dateCreated = $dateCreated
	}
	function setName($name){
		$this->name = $name;
	}
	function setManager($manager){
		$this->manager = $manager; 
	}


}//household Class ends 
?>