var isAdmin = "false";

function validate() {
  var uname = document.forms["login-form"]["username"].value;
  var pswd = document.forms["login-form"]["password"].value;
  var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(xhttp.readyState = 4 && xhttp.status == 200)
			isAdmin = xhttp.responseText;
	};
	xhttp.open("GET", "php/validateCredentials.php?uname=" + uname + "&pswd=" + pswd, true);
	xhttp.send();
}

function validateCredentials() {
  if(isAdmin == "true")
    return true;
  alert("Username or password invalid!");
  return false;
}
