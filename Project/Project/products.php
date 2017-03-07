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
$dbcnx = mysqli_connect("localhost", "root", "", "contractor");
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}


$sql = "SELECT * from materials";
$res = mysqli_query($dbcnx, $sql);
if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error());
        exit();
    }

  
else
	{
  
  if(mysqli_num_rows($res)< 1){
  //there are no customer
  $display_block = "<p><em> No customers</em></p>";  }
  else
  {
   //create the display string
   $display_block = <<<END_OF_TEXT
   <table id="materialM">
   <tr>
   <th>Materials</th>
    <th>Price/PerTon</td>
   </tr>
END_OF_TEXT;
   
   while($customer_info=mysqli_fetch_array($res)){
   $type=$customer_info['Material'];
   $ton=$customer_info['PriceTon'];
   
   
   //add to display
      $display_block .= <<<END_OF_TEXT
      <tr><td>$type</td>
		<td>&euro;$ton</td>
      </tr>
END_OF_TEXT;
      
   
   }
  //free results
  mysqli_free_result($res);
  
  //close connection
  mysqli_close($dbcnx);
   $display_block .="</table>";
  }
  
  }

	?>
  <!DOCTYPE html>
  <html>
  <head>
  <title>Material Type </title>

  </style>
  </head>
  <body>
  <h1> Materials </h1>
  <?php echo $display_block; ?>
  
 <h2 id="OM"> Order Materials.</h2>
<form name="order" action ="order.php" method="post" id="formOrder">
Customer Id </font> <input type="text" name="custid"  id="lefttSide" size="6" maxlength="4"> <br/>
 Width: </font> <input type="text" name="width"  id="lefttSide" size="6" maxlength="4">(m)
<font id="centerT">Length: </font><input type="text" name="length" id="rightSide" size="6" maxlength="4"> <font id="m">(m)</font><br/>
<font id="leftText">Depth: </font><input type="text" name="depth" size="6" maxlength="4">(m)
<font id="FontT"> Type: 
 <select name="type" >
 <option value=" "> </option>
  <option value="limestone">Limestone</option>
  <option value="sand">Sand</option>
<option value="gravel">Gravel</option>
</select> <br/>
Date: <input type=" text" name="date">
<input type ="submit" name="Submitorder" value="Orders"> </form>
  </body>
  </html>