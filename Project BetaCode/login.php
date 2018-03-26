<?php
// including the intitial functions page
include 'initial.php';
?>

  <html>
  <head>
    <title>login</title>
<style>
<?php
// avoiding redundant code
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
  
  
  <h2>Log in and enjoy!</h2>
  
  <form method=post action="member.php">
  <table bgcolor=#cccccc>
   <tr>
     <td colspan=2>Members only:</td>
   <tr>
     <td>Email:</td>
     <td><input type=text placeholder="tade.lamma@gmail.com" name=email></td></tr>
   <tr>
     <td>Password:</td>
     <td><input type=password placeholder="*********" name=passwd></td></tr>
   <tr>
     <td colspan=2 align=center>
     <input type=submit  value="Log in">
	 </td>
	 </tr>
   <tr>
     <!--<td colspan=2><a href="forgot_form.php">Forgot your password?</a></td>-->
	 <td colspan=2> <a href="register.php">Not a member? Not a Problem!</a>
   </tr>
 </table>
 </form>
 </body>
 </html>
