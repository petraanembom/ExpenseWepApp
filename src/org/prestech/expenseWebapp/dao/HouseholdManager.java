package org.prestech.expenseWebapp.dao;

/****
 * 
 * @author Presley M.
 *
 */
public class HouseholdManager extends User {

	
	/******************************************************************
	 * No-arg constructor
	 * 
	 * calls the setIsManager() from the super class and set it to true
	 */
	public HouseholdManager(){
		this.setIsManager(true);
	}//RegularUser() Ends 
	
}//HouseholdManager Ends 

