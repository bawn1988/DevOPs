<!DOCTYPE html>
<html lang='en'>
  <head>
  
 <title>Sign Up Result </title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
	<meta name='robots' content='all'>
  <link rel="stylesheet" type="text/css" href="main.css">
   <img src="images/title.png" alt="quarry" style="float:left;">
<?php
 echo'<header >';

 echo '</header>';
 echo '<table>';
 echo '<tr>';
 echo'<td class="menu_buttons"><a href="index.php"><b> HOME</b> </a> </td>';
echo'<td class="menu_buttons"><a href="products.html"> <b>PRODUCTS</b></a></td>';
echo'<td class="menu_buttons"><a href="about.html"><b>ABOUT </b></a></td>';
echo'<td class="menu_buttons"><a href="signup.html"> <b>REGISTER </b></a></td>';
echo'<td class="menu_buttons"><a href="Login.php"> <b>LOGIN</b></a></td>';
 echo'</tr>';
 echo'</table>';
 
$sname= $_POST['sname'];
$fname= $_POST['fname'];
$address1= $_POST['address1'];
$address2= $_POST['address2'];
$town= $_POST['town'];
$county= $_POST['county'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$password2= $_POST['password2'];

if ($sname== ''  or $fname== ''  or $address1== '' or $town=='' or $email== '' or $phone== '' or  $password2=='')
{
echo("<h1> Missing Some Details </h1> <br />\n");
echo("<a href='signup.html' class='return'> Return");
exit();
} 

else
{
$dbcnx = mysqli_connect("localhost", "root", "", "contractor");
// Check connection
if  (mysqli_connect_errno($dbcnx ))
{
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();
}

if ($_POST['customer'] == "Sign Up") {

$sname = mysqli_real_escape_string($dbcnx, $sname);
$fname = mysqli_real_escape_string($dbcnx, $fname);
$address1 = mysqli_real_escape_string($dbcnx, $address1);
$address2 = mysqli_real_escape_string($dbcnx, $address2);
$town = mysqli_real_escape_string($dbcnx, $town);
$email = mysqli_real_escape_string($dbcnx, $email);
$sql = "INSERT INTO customers(Surname, Forename, Address1, Address2, Town, County, Email, Telephone, Password) VALUES('$sname', '$fname', '$address1', '$address2', '$town', '$county', '$email', '$phone', '$password2')";
$res = mysqli_query($dbcnx, $sql);

if ($res == 0) 
      {
        echo("<p>Error registering: " . mysqli_error() . "</p>");
      }
else
      {
	echo("<p class='return'> Welcome, $fname<br>");
	echo("<a href='index.php'> Return </a> </p>");
      }
}mysqli_close($dbcnx);}	
?>
 </head>


</html>

