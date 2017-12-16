
class AccountService {

	static validateNameFormat(nameInputFieldId){
		var name = document.getElementById(nameInputFieldId).value;

		name = name.trim(); // remove white spaces 

		//return error message "null"
		if(name == "" || name == null){
			return "Name must by provided";
		}//if Ends 

		//impose restriction on name's lenthth
		if(name.length> 100){
			return "Name must be less than 100 characters long \r";
		}//if Ends 

		//impose restriction on the type of meta-characters 
		if(name.includes("#") || name.includes("%")
			||name.includes("+") || name.includes("&")
			|| name.includes("!")|| name.includes("^")
			|| name.includes("(")|| name.includes("}")
			|| name.includes("{")|| name.includes(")")
			|| name.includes("*")|| name.includes("\\")			
			|| name.includes("=")|| name.includes("/")
			|| name.includes("+")){

			return"Name contains invalid metacharacter \
					 Must not contain (+, = !, #, %, ^, &. *) \r"; 

		}//if Ends 
		return "";
	}//validateNameFormat() Ends 

	/**
	*/
	static validateEmailFormat(emailInputFieldId) {
		 //retrive email from input field 
		 var email = document.getElementById(emailInputFieldId).value;

		 email = email.trim()//trim white spaces from input

		//return error message if input is null or empty
		if(email=="" || email == null){
			return "An email must be provided\r";
		}//if Ends 

		//impose restriction on email's lenth
		if(email.length> 100){
			return "Email should be less, or equal to \
			 100 characters long\r";
		}//if Ends 

		//email cannot have white spaces in between 

		//check if email address has the correct components 
		if(email.charAt(0)== "@" || 
			email.includes("@") == false || email.includes(".")==false ){
			return "Email must have the correct format \
					   (emailname@provider.domain)\r";
		}//if Ends 

		return "";
	}


	static validateUsernameFormat(inputFieldId) {
		// body...
		var username = document.getElementById(inputFieldId).value;

		username = username.trim(); 
		//username input cannot be null, or empty 
		if(username=="" || username==null){
			return "A username must be provided\r";
		}//if Ends 

		//TODO: username must start with a letter
		//user REGEX, or ASCII numbers

		//TODO: username cannot have white spaces in between 
		if(username.includes(" ") || username.includes("\r")){
			return "Username cannot contain white spaces\r"
		}


	}

	static validatePasswordFormat(passwdInputFieldId, rePasswdInputFieldId) {
		var password = document.getElementById(passwdInputFieldId).value;
		var rePassword = document.getElementById(rePasswdInputFieldId).value;

		//DO NOT TRIM password WHITE SPACES B/C THIS MIGHT BE 
		//INTENSIONALLY INCLUDED BY THE USER. 

		//password and re-password must be thesame 
		if(password != rePassword){
			return "Passwords do not match\r";
		}//if Ends 

		//make sure password is at least six chars long
		if(password.length < 6){
			return "Password must be at least 6 characters\r";
		}//if Ends

		//TODO: check if password contains at least 1 capital letter. 

		//TODO: check if password contain at least 1 small letter 

		//TODO check if password contains atleast 1 number 

		//TODO check if password contains at least 1 meta-chars
		return ""; 
	}//validatePasswordFormat() Ends 

}//AccountService Class Ends 