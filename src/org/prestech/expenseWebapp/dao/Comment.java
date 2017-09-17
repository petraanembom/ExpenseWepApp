package org.prestech.expenseWebapp.dao;

import java.util.ArrayList;

/**
 * 
 * @author asohm
 *
 */
public class Comment {

	private User author;
	private ArrayList<User> viewers;
	private String date;
	private String content;
	
	
   /*************************************************************
	* 				CONSTRUCTORS 
	*************************************************************/
	
	/********************
	 * No-arg constructor 
	 */
	public Comment(){
		//initialize date
	}//comment() Ends 
	
	/********************
	 * 
	 * @param receivers
	 * @param content
	 */
	public Comment(ArrayList<User> viewers, String content){
		this.viewers = viewers;
		this.content = content; 
		//initialize data too 
	}//Comment() Ends 

	

	/**************************************************************
	 * 				CLASS FUNCTIONS
	*************************************************************/
	public void commitComment(){
		
	}
	
	public void deleteComment(){
		
	}

	
	

	/**************************************************************
	 * 				GETTERS AND SEETERS 
	*************************************************************/
	
	public User getSender() {
		return author;
	}

	public void setSender(User author) {
		this.author = author;
	}

	public ArrayList<User> getViewers() {
		return viewers;
	}

	public void setViewers(ArrayList<User> viewers) {
		this.viewers = viewers;
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
