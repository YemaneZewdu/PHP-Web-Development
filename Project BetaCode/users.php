<?php
// function that checks if the user exists
function user_exist ($email){
	// select from table users where the email entered and the email on data base matches
	$query = mysql_query("SELECT COUNT(`user_Id`) FROM `users` WHERE `email` = '$email'");
	
	// if it matches, return true
	if (mysql_result($query, 0) === 1) {return true;}
		
		// if not, return false
		return false;
}
// function for returning the user_id
function get_user_id ($email){

	return mysql_result(query("SELECT `user_Id` FROM `users` WHERE `email` = '$email'"), 0,'user_Id');
	
}
// function that logs in the users
function login($email, $password){
	
	// get the user_id of the specific email
	$user_id = get_user_id ($email);
	// hashing the password
	$password = md5($password);
	
	// if the email and password matches, then return the user_id of that user
	if (mysql_result(mysql_query("SELECT COUNT(`user_Id`) FROM `users` WHERE 
	`email` = '$email' AND `password` = '$password' " === 1){
		return $user_id;
	}
	return false;
}
// function for registering
function register ($registration_data){
	
	// hashing the password 
	$registration_data['password'] = md5($registration_data['password']); 
	
	// inserting to the data base
	$sql = "INSERT INTO `users` ( `first name`, `last name`, `email`, `password`)
			VALUES ('$registration_data['first name']', '$registration_data['last name']',
					'$registration_data['email']', '$registration_data['password']');
	
	// success message
	echo 'Congrats ' . $registration_data['first name'] . ', you have successfully created your account!!';
	
}
?>