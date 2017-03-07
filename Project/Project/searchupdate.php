<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
   <head>
      <title>Update</title>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="styles.css" />
   </head>
   
   <body>
 

<?php
// Show simple format of the records so person can choose the reference name/number
// this is then passed to the next page, for all details

$dbcnx = mysqli_connect("localhost", "root", "", "contractor");
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}


$sql ="SELECT Password FROM customers";
$res = mysqli_query($dbcnx, $sql);
if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error($dbcnx));
        exit();
    }


	else
	{
  
  if(mysqli_num_rows($res)< 1){
  //there are no customer
  $display_block = "<p><em> No customers</em></p>";  }
  else
  {


echo "<br /><b>A Quick View</b><br /><br />";
echo "<table border=1>";
echo "<tr><td><b>User Id</b></td>
<td>FirstName:</td><td>Address</td></tr>";

while ($row = mysqli_fetch_array($res)) {

echo ("<tr><td>");

echo("</td></tr>");
} 
echo "</table>";

}  

 //free results
  mysqli_free_result($res);
  
  //close connection
  mysqli_close($dbcnx);}
?>

<br /><br />
<form method=POST action="updateform.php">
<div>Enter ID to update:
<input type="text" name="record" size="10" maxlength="10"><br /><br />
<input type="submit" name="go" value="Search on that Input"></div></form>



</html>

