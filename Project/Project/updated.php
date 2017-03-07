 <title> Update Result </title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
	<meta name='robots' content='all'>
  <link rel="stylesheet" type="text/css" href="php1.css">
   <img src="images/title.png" alt="quarry" style="float:left;">

<?php
session_start();
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
// Connect to the database server
$dbcnx = mysqli_connect("localhost", "root", "", "contractor");
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}


$ud_id=$_POST['ud_id'];
$ud_sname=$_POST['ud_sname'];
$ud_fname=$_POST['ud_fname'];
$ud_address1=$_POST['ud_address1'];
$ud_address2=$_POST['ud_address2'];
$ud_town=$_POST['ud_town'];
$ud_county=$_POST['ud_county'];
$ud_email=$_POST['ud_email'];
$ud_phone=$_POST['ud_phone'];
$ud_password=$_POST['ud_password'];
$sql="UPDATE customers SET Surname ='$ud_sname', Forename='$ud_fname', Address1='$ud_address1', Address2='$ud_address2', Town='$ud_town', County='$ud_county', Email='$ud_email', Telephone='$ud_phone', Address1='$ud_password' WHERE CustomerId=$ud_id";

$res = mysqli_query($dbcnx, $sql);
if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error());
        exit();
    }

else
	{
  echo $res;
  if(mysqli_affected_rows($dbcnx)< 1){
  
  echo "<p><em> No updates <br> <a href='index.php'> Home </a></em></p>";  }
  else
  {
echo " Record Updated";}
  mysqli_close($dbcnx);

}
?>



  
