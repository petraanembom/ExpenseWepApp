package org.prestech.expenseWebapp.dao;

public abstract class User {

	private String username;
	private String password;
	private String firstName;
	private String lastName;
	private String type;
	private boolean isManager = false;
	private Household household;

	
	/**************************************************************
	 * 				CLASS FUNCTIONS
	*************************************************************/
		
	
	/*************************************************************
	 * 		       Getters and Setters  
	 *************************************************************/
	public boolean getIsManager() {
		return this.isManager;
	}

	public void setIsManager(boolean isManager) {
		this.isManager = isManager;
	}
	
	
	public String getUsername() {
		return username;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public String getFirstName() {
		return firstName;
	}

	public void setFirstName(String firstName) {
		this.firstName = firstName;
	}

	public String getLastName() {
		return lastName;
	}

	public void setLastName(String lastName) {
		this.lastName = lastName;
	}

	public String getType() {
		return type;
	}

	public void setType(String type) {
		this.type = type;
	}

	public Household getHousehold() {
		return household;
	}

	public void setHousehold(Household household) {
		this.household = household;
	}
	
	
	
}//User Class Ends 
