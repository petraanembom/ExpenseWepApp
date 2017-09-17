package org.prestech.expenseWebapp.dao;

import java.util.ArrayList;

/********************************
 * 
 * @author Presley M
 *
 */
public class Household {

	private String householdId;
	
	private ArrayList<User> householdMembers;
	
	
	/**********************
	 *  no-arg Constructor 
	 */
	public Household(){
		
	}//Household

	
	
	
	/*********************************
	 * Class Getters and Setters 
	 * 
	*********************************/
	public String getHouseholdId() {
		return householdId;
	}

	public void setHouseholdId(String householdId) {
		this.householdId = householdId;
	}

	public ArrayList<User> getHouseholdMembers() {
		return householdMembers;
	}

	public void setHouseholdMembers(ArrayList<User> householdMembers) {
		this.householdMembers = householdMembers;
	}
	

}//Household Class Ends 
