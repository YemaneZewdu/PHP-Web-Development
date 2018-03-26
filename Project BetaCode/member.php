<?php 
// including the initial functions page
include 'initial.php';

// checking the user's email if it exists or not 
if (user_exist($email) === false){
	
	echo 'You don\'t have an account';
}
 else {
	 // if the user_exist() function returns true, then we check for the entered email and password combination
	 $login = login($email, $password);
	 if ( $login === false){ echo 'The email/password is incorrect!';}
	 
	 else{
		 // setting the user in to the home page
		 $_SESSION['user_Id'] = $login;
		 echo 'Welcome '. $email ;
		 
	 }
 }
?>


