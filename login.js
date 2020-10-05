/* JS for Login */


function loginValidate() {
	
	var uname = document.forms["loginForm"]["username"].value;
	var pass = document.forms["loginForm"]["password"].value;
	

	if(uname=="") {
		alert("Email must be filled");
		return false;
	} if (pass=="") {
		alert("Please enter your password");
		return false;
	}

}
