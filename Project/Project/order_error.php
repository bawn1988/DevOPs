<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>About </title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
	<meta name='robots' content='all'>
  <link rel="stylesheet" type="text/css" href="main.css">
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
 <br>
<h1 id="errorL">  ERROR!!!</h1> 
	<h2> You must Login first.</h2>
	<form action="Login.php" method="post" id="login">

    Email: <input type="text" name="email" class="form_fields"/><br /><br>
	Password: <input type="password" name="password" class="form_fields"/><br /><br>
    <input type="submit" name="submit" value="Login" />
</form>
 
  </body>
</html>
