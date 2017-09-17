package org.prestech.expenseWebapp.dao;

public abstract class Expense {

	/************************
	 * Attribute declaration
	 */
	private String dateOfExpense;
	private double amount;
	private User spender;
	private String category;
	private String description;
	private boolean isHouseHoldExpense;
	
	
	/************************************
	 * Class Getters and Setters 
	 *************************************/
	
	public String getDateOfExpense() {
		return dateOfExpense;
	}
	public void setDateOfExpense(String dateOfExpense) {
		this.dateOfExpense = dateOfExpense;
	}
	public double getAmount() {
		return amount;
	}
	public void setAmount(double amount) {
		this.amount = amount;
	}
	public User getSpender() {
		return spender;
	}
	public void setSpender(User spender) {
		this.spender = spender;
	}
	public String getCategory() {
		return category;
	}
	public void setCategory(String category) {
		this.category = category;
	}
	public String getDescription() {
		return description;
	}
	public void setDescription(String description) {
		this.description = description;
	}
	public boolean isHouseHoldExpense() {
		return isHouseHoldExpense;
	}
	public void setIsHouseHoldExpense(boolean isHouseHoldExpense) {
		this.isHouseHoldExpense = isHouseHoldExpense;
	}
	

}
