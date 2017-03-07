  <!DOCTYPE html>
<html lang='en'>
  <head>
  <title>Login </title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
	<meta name='robots' content='all'>
 <link rel="stylesheet" type="text/css" href="main.css">
 
<?php
session_start();
//or you could use if (submitPassword =="Submit")
 if (empty($_POST['email']) || empty($_POST['password']))
{?>

<form action="Login.php" method="post" id="login">

    Email: <input type="text" name="email" class="form_fields" maxlength="25"/><br /><br>
	Password: <input type="password" name="password" class="form_fields" maxlength="16"/><br /><br>
    <input type="submit" name="submit" value="Login" />
</form>


<?php  
} 

else
{

ob_start();

 $dbcnx = mysqli_connect("localhost", "root", "", "contractor");
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}

$email= $_POST['email'];
$password= $_POST['password'];

$sql = "SELECT * FROM customers where Email='$email' AND Password='$password' ";
mysqli_query($dbcnx, $sql);
$res = mysqli_query($dbcnx, $sql);
if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error());
        exit();
    }
  
 else
	{
  
  if(mysqli_num_rows($res)< 1){
  //there are no customer
  echo "<p id='loginError'><em> No customers</em></p>";  }
 else 
{
while($customer_info=mysqli_fetch_array($res)){
   
	 $customerid=($customer_info['CustomerId']);
	 $forename=stripslashes($customer_info['Forename']);
	 $surname=stripslashes($customer_info['Surname']);
	 $address1=stripslashes($customer_info['Address1']);
	 $address1=stripslashes($customer_info['Address1']);
	 $address2=stripslashes($customer_info['Address2']);
	 $town=stripslashes($customer_info['Town']);
	 $county=($customer_info['County']);
	 $email=stripslashes($customer_info['Email']);
	 $phone=(float)($customer_info['Telephone']);
	 $_SESSION["CustomerId"] = $customerid;
	 $_SESSION["Forename"] = $forename;
	$_SESSION["Surname"] = $surname;
	$_SESSION["Address1"] = $address1;
	$_SESSION["Address2"] = $address2;
	$_SESSION["Town"] = $town;
	$_SESSION["County"] = $county;
	$_SESSION["Email"] = $email;
	$_SESSION["Telephone"] = $phone;
	
//echo("<a href="profile.php"> Click here </a>");
$URL="profile.php";
Header ("Location: $URL");}
exit();
ob_end_flush();	
}
  //free results
  mysqli_free_result($res);
  
  //close connection
  mysqli_close($dbcnx);
  
  }
  
  }

	?>
</head>	
<body>
 <header >
  <img src="images/title.png" alt="quarry" style="float:left;">
  </header>
  <table>
  <tr>
 <td class="menu_buttons"><a href="index.php"><b> HOME</b> </a> </td>
<td class="menu_buttons"><a href="products.html"> <b>PRODUCTS</b></a></td>
<td class="menu_buttons"><a href="about.html"><b>ABOUT </b></a></td>
<td class="menu_buttons"><a href="signup.html"> <b>REGISTER </b></a></td>
<td class="menu_buttons"><a href="Login.php"> <b>Login</b></a></td>
 </tr>
 </table>
</body>
</html>	
