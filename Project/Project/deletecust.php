
 <title> Delete Result </title>
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
$custid = $_POST['custid'];

if ($custid == ''or !is_numeric($custid) )
{
echo("Incorrect Data <br />\n");
} 

else
{
$dbcnx = mysqli_connect("localhost", "root", "", "contractor");
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}

$sql = "DELETE from customers WHERE CustomerId = $custid";
$res = mysqli_query($dbcnx, $sql);
if($res){
		$count = mysqli_affected_rows($dbcnx);
	}
	if($count!=' '){

             echo("Customer. " . " ". $custid. " " . "has been deleted successfully\n");
             }
             else{
             
             echo "No such record deleted";
             }



  mysqli_close($dbcnx);	
	
}

?>

