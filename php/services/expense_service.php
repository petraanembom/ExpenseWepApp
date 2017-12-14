<?php

namespace webapp\service;
use webapp\model;

require $_SERVER['DOCUMENT_ROOT']."/env_params/global_functions.php";
require $_SERVER['DOCUMENT_ROOT']."/env_params/php_path_constants.php";

require $_SERVER['DOCUMENT_ROOT'].EXPENSE_MODEL;

require 'db_services.php';


echo "expense service \r";


/******************************************************************************
*saveExpense(): This function is used to enter expense data into the database. 
* 
*Parameter:
*	newExpense: This is an expense object. It is encapsulated with expense data. 
*/
//TODO: take care of "Notices" which are printed out when this function runs.
function saveExpense($newExpense){
	$dbSource = new DataSource(); 
	//connect to database 
	$conn = $dbSource->connectToDb(); 
    
    //prepare a query statement for writing user's information to data base
	$prepareStmt = $conn->prepare("INSERT INTO expenses (category, amount, good_service_type, date_incurred) VALUES (:category, :amount, :item, :dateIncurred)");
	$prepareStmt->bindParam('category', $newExpense->getCategory());
	$prepareStmt->bindParam('amount', $newExpense->getAmount());
	$prepareStmt->bindParam('item', $newExpense->getItem());
	//$prepareStmt->bindParam('type', $newExpense->getExpType());
	$prepareStmt->bindParam('dateIncurred', $newExpense->getDateIncurred());

	//execute query statment to create new user 
	$prepareStmt->execute();

	$dbSource->closeDb();	
}//saveExpense() Ends 

//creat an Expense object 
$expense = model\Expense::createExpense($_POST); 
//echo $expense->getCategory();
saveExpense($expense);

//go back to home page
echoRedirect(HOME_PAGE);

?>