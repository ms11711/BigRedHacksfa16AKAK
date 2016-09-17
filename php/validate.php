<?php
function validateLogin(){
	return (validateUsername() && validatePassword());
}

function validateUsername(){
	if (empty($_POST["username"])){
		print "<div class = 'error'><p>Username is required</p></div>";
		return false;
	}
	return true;
}

function validatePassword(){
	if (empty($_POST["password"])){
		print "<div class = 'error'><p>Password is required</p></div>";
		return false;
	} else if (strlen($_POST["password"]) < 8){
		print "<div class = 'error'><p>Password must be more than X characters.</p></div>";
		return false;
	}
	return true;
}
?>