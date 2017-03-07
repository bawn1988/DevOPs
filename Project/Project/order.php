
 <title> Update Result </title>
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
 
 $custid = $_POST['custid'];
$width= (int)$_POST['width'];
$length= (int)$_POST['length'];
$depth= (int)$_POST['depth'];
$type =$_POST['type'];
$ton =$width * $length * $depth * 0.25;
$date = $_POST['date'];
$cost = 0;
if( $type=='limestone'){
	$cost = $ton*15;
}

if( $type=='sand'){
	$cost = $ton*12.55;
}

if( $type=='gravel'){
	$cost = $ton*13.45;
}


if ($custid== ''or $width== ''  or $length== ''  or $depth== '' or $date== '' )
{
echo ("<a href='products.php' id=>");
echo("<font size='5'> <b> Missing Some Details !!!</b> <br />\n");
exit();
} 


else
$dbcnx = mysqli_connect("localhost", "root", "", "contractor");
// Check connection
if  (mysqli_connect_errno($dbcnx ))
{
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();
}

if ($_POST['Submitorder'] == "Orders") {

$sql = "INSERT INTO orders(Tons,TotalCost,Type,Date, CustomerId) VALUES('$ton', '$cost', '$type', '$date', '$custid')";
$res = mysqli_query($dbcnx, $sql);

if ($res == 0 && $type == 'limestone') 
      {
        echo("<p>Error registering: " . mysqli_error() . "</p>");
      }
	  
	  if ($ton > 0 && $type == 'limestone') 
      {
        $sql = "UPDATE materials SET Tons=Tons - '$ton' WHERE Material ='Limestone'";
		$res = mysqli_query($dbcnx, $sql);
		
		echo("<font size='3'> <a href='index.php'> Home </a> </font>");
	echo("<font size='5'> <b>Thanks for the order. Your Order will be delivered shortly</b> </font>");
      }
	  
	  
	  if ($ton > 0 && $type == 'sand') 
      {
        $sql = "UPDATE materials SET Tons=Tons - '$ton' WHERE Material ='Sand'";
		$res = mysqli_query($dbcnx, $sql);
		
      }
	  
	   if ($ton > 0 && $type == 'gravel') 
      {
        $sql = "UPDATE materials SET Tons=Tons - '$ton' WHERE Material ='Gravel'";
		$res = mysqli_query($dbcnx, $sql);
		echo("<font size='3'> <a href='index.php'> Home </a> </font>");
	echo("<font size='5'> <b>Thanks for the order. Your Order will be delivered shortly</b> </font>");
	}
else
      {
	 echo("<font size='3'> <a href='index.php'> Home </a> </font>");
	echo("<font size='5'> <b>Thanks for the order. Your Order will be delivered shortly</b> </font>");
	
      }
mysqli_close($dbcnx);}	
?>
