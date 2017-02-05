<!DOCTYPE html>
<html>
<body background = "runner.png">
<div align="middle" align="below">

<body bgcolor="#E6E6FA">
<form name="htmlform" method="post" action = "signup.php">
<table width="450px" frame="box">
<h1>Register Here</h1>
</tr>

<tr class="spacer"><td></td></tr>
<tr>
 <td valign="top">
  <label for="email">Email Id*</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30" required>
 </td>
 </tr>
 <tr class="spacer"><td></td></tr>
<tr>
 <td valign="center">
  <label for="password">Password*</label>
 </td>
 <td valign="center">
  <input  type="password" name="password" maxlength="30" size="30" required>
 </td>
</tr>

<tr class="spacer"><td></td></tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit" name="sub">  
  </td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?php
	if(isset($_REQUEST['sub']))
	{
		$ID = $_POST['email'];
		$pass = $_POST['password'];
		$mysqli = new mysqli( "localhost","root","","record" ) or die( $mysqli->error );
		$select = "INSERT INTO user_information VALUES ('$ID','$pass')";
		if($mysqli->query($select))
		{
			echo "Signup Successful\n\t";
			echo "RE-login\n";
			header("Location : signin.php");
		}
	}
?>
