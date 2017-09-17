package org.prestech.expenseWebapp.dao;

import java.util.ArrayList;

/**
 * 
 * @author asohm
 *
 */
public class Message {

	private User sender;
	private ArrayList<User> receivers;
	private String date;
	private String content;
	
	
   /*************************************************************
	* 				CONSTRUCTORS 
	*************************************************************/
	
	/********************
	 * No-arg constructor 
	 */
	public Message(){
		//initialize date
	}//comment() Ends 
	
	/********************
	 * 
	 * @param receivers
	 * @param content
	 */
	public Message(ArrayList<User> receivers, String content){
		this.receivers = receivers;
		this.content = content; 
		//initialize data too 
	}//Comment() Ends 

	

	/**************************************************************
	 * 				CLASS FUNCTIONS
	*************************************************************/
	public void sendMessage(){
		
	}
	
	public void deleteMessage(){
		
	}
	
	
	

	/**************************************************************
	 * 				GETTERS AND SEETERS 
	*************************************************************/
	
	public User getSender() {
		return sender;
	}

	public void setSender(User sender) {
		this.sender = sender;
	}

	public ArrayList<User> getReceivers() {
		return receivers;
	}

	public void setReceivers(ArrayList<User> receivers) {
		this.receivers = receivers;
	}

	public String getDate() {
		return date;
	}

	public void setDate(String date) {
		this.date = date;
	}

	public String getContent() {
		return content;
	}

	public void setContent(String content) {
		this.content = content;
	}
	

	
}//Comment Class Ends 
