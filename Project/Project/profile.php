  
 <title>Profile </title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
	<meta name='robots' content='all'>
  <link rel="stylesheet" type="text/css" href="php1.css">
   <img src="images/title.png" alt="quarry" style="float:left;">
<?php
session_start();
$sid = session_id();
   $sid = SID;
   $customerid = $_SESSION["CustomerId"];
   $forename = $_SESSION["Forename"];
   $surname = $_SESSION["Surname"];
   $address1 = $_SESSION["Address1"];
   $address2 = $_SESSION["Address2"];
   $town = $_SESSION["Town"];
   $county = $_SESSION["County"];
   $email= $_SESSION["Email"];
   $phone= $_SESSION['Telephone'];
   
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
 
  print("<p id='loginD'>Welcome Back, ".$forename."</p>");
  echo"<table id='table1'>";
  echo"<tr>";
  echo"<th>Your Details</th></tr>";
  echo"<tr><td>Customer Id:</td> ";
  echo"<td>$customerid</td> </tr>";
   echo"<tr><td>Forename:</td> ";
  echo"<td>$forename</td> </tr>";
  echo"<tr><td>Surname:</td> ";
  echo"<td>$surname</td> </tr>";
   echo"<tr><td>Addresss1:</td> ";
  echo"<td>$address1</td></tr> ";
  echo"<tr><td>Addresss2:</td> ";
  echo"<td>$address2</td></tr> ";
  echo"<tr><td>Town:</td> ";
  echo"<td>$town</td></tr> ";
  echo"<tr><td>County:</td> ";
  echo"<td>$county</td></tr> ";
  echo"<tr><td>Email:</td> ";
  echo"<td>$email</td></tr> ";
  echo"<tr><td>Phone:</td> ";
  echo"<td>$phone</td></tr> ";
  echo"</table>";
   print("<a href='home.html' class='logout'> LOGOUT </a>");

$dbcnx = mysqli_connect("localhost", "root", "", "contractor");
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}

$sql ="SELECT * FROM customers";
$res = mysqli_query($dbcnx, $sql);
if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error($dbcnx));
        exit();
    }

 
  //close connection
  mysqli_close($dbcnx);

?>
<!DOCTYPE html>
<html lang='en'>
  <head>

  </head>
  <body>
  
    <h4 id="cu"> Enter Customer Id to update: </h4>  <form name="update" method="post" action="updateform.php" > 
		  <input type="text" name="record" size="5" maxlength="3" id="update1"><br /><br />
          <input type="submit" name="Update" value="UPDATE"  id="ubutton"/>    </form>
		<br>  
<h4 id="cd"> Enter Customer Id to delete: </h4> <form name="delete" method="post" action="deletecust.php"> 
		   <input name="custid" type="text" id="delete1" size="5" maxlength="3">
          <input type="submit" name="Delete" value="DELETE" id="dbutton"  />    </form>
  </body>
</html>