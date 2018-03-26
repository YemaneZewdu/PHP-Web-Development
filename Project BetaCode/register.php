<?php
// including the intitial functions page
include 'initial.php';
// if the form is filled, then check for the following 
if (empty($_POST) === false {
	
	// if the user enters a registered email, 
	if (user_exist($_POST['email']) === true)
	{ echo 'You already have an account, please log in.';
	}
	
	// if the passowrd is less than 6 characters long
	if (strlen($_POST['password']) <= 6)
	{
			echo 'Your password is too short';
	}
	// if the passwords do not match
	if ($_POST['password'] !== $_POST['password2']){
		echo 'The passwords do not match';  
	}
	// if it passed the above if statement, it means the user has entered a valid information
	else {
		// register the user
		// array with key and values fpr storing the user's information
		$registration_data = array( 'first name' => $_POST['first name'], 'last name' => $_POST['last name'],
									'email' => $_POST['email'], 'password' => $_POST['password']});
	register($registration_data);
		
	}	
}

?>

  <html>
  <head>
    <title>register</title>
<style>
<?php
require('styles.php');
?>
</style>
  </head>
  <body>
  <?php
require('logo.php');
?>
  <h1>&nbsp;EthioTaste Resturant</h1>
  <hr />
  
  
  <h2>Become a member and come join us!</h2>
  
  <form method=post action="">
  <table bgcolor=#cccccc>
   <tr>
     <td>First Name:</td>
     <td><input type=text placeholder="Yemane" name=first name></td></tr>
   <tr>
   <tr>
     <td>Last Name:</td>
     <td><input type=text placeholder="Zewdu" name=last name></td></tr>
   <tr>
     <td>Email:</td>
     <td><input type=text placeholder="tade.lamma@gmail.com" name=email></td></tr>
   <tr>
     <td>Password:</td>
     <td><input type=password placeholder="*********" name=password></td></tr>
   <tr>
   <tr>
     <td>Password:</td>
     <td><input type=password placeholder="*********" name=password2></td></tr>
   <tr>
     <td colspan=2 align=center>
     <input type=submit  value="Register">
	 </td>
	 </tr>
   <tr>
	 <td colspan=2> Have an account?<a href="register.php"> Log In!</a>
   </tr>
 </table>
 </form>
 </body>
 </html>
