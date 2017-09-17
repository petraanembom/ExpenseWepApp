package org.prestech.expenseWebapp.dao;

public class HouseholdExpense extends Expense {

	/**********************************************
	 * No-arg constructor 
	 * 
	 * Calls the isHouseholdExpense to tree via call 
	 * to parent's setter function
	 */
	public HouseholdExpense() {
		this.setIsHouseHoldExpense(true); 
	}//HouseholdExpense() Ends 
	
	
}//HouseholdExpense() Ends 
