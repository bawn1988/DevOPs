 <title>Update Form </title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
	<meta name='robots' content='all'>
  <link rel="stylesheet" type="text/css" href="php1.css">
   <img src="images/title.png" alt="quarry" style="float:left;">
<?php
 echo'<header >';
 echo '</header>';
 echo '<table>';
 echo '<tr>';
 echo'<td class="menu_buttons"><a href="index.php"><b> HOME</b> </a> </td>';
echo'<td class="menu_buttons"><a href="products.php"> <b>PRODUCTS</b></a></td>';
echo'<td class="menu_buttons"><a href="about.html"><b>ABOUT </b></a></td>';
echo'<td class="menu_buttons"><a href="signup.html"> <b>REGISTER </b></a></td>';
echo'<td class="menu_buttons"><a href="Login.php"> <b>LOGIN</b></a></td>';
 echo'</tr>';
 echo'</table>';
$dbcnx = mysqli_connect("localhost", "root", "", "contractor");
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}


$customerid=$_POST['record'];

$sql="SELECT * FROM customers WHERE CustomerId=$customerid";

$res = mysqli_query($dbcnx, $sql);
if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error($dbcnx));
        exit();
    }


else 
{
$row = mysqli_fetch_array($res); 
$sname=$row['Surname'];
$fname=$row['Forename'];
$address1=$row['Address1'];
$address2=$row['Address2'];
$town=$row['Town'];
$county=$row['County'];
$email=$row['Email'];
$phone=$row['Telephone'];
$password=$row['Password'];


}
//free results
  mysqli_free_result($res);
  
  //close connection
  mysqli_close($dbcnx);
?>
<html>
<head>
</head>
</body>
<form action="updated.php" method="post" id="upadetF">
<input type="hidden" name="ud_id" value="<?php echo $customerid; ?>">
Surname: <input type="text" name="ud_sname" class="textU" value="<?php echo $sname; ?>"><br /><br />
Forename: <input type="text" name="ud_fname" class="textU" value="<?php echo $fname; ?>"><br /><br />
Address1: <input type="text" name="ud_address1" class="textU" value="<?php echo $address1; ?>"><br /><br />
Address2: <input type="text" name="ud_address2" class="textU" value="<?php echo $address2; ?>"><br /><br />
Town: <input type="text" name="ud_town"class="textU" value="<?php echo $town; ?>"><br /><br />
County: <input type="text" name="ud_county" class="textU" value="<?php echo $county; ?>"><br /><br />
Email: <input type="text" name="ud_email" class="textU" value="<?php echo $email; ?>"><br /><br />
Telephone: <input type="text" name="ud_phone" class="textU" value="<?php echo $phone; ?>"><br /><br />
Password <input type="text" name="ud_password" class="textU" value="<?php echo $password; ?>"><br /><br />

<input type="Submit" value="Update">
</form>
</body>
</html>







