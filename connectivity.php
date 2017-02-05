<?php

$con=mysqli_connect("localhost","root","","record") or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
session_start();   //starting the session for user profile page
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysqli_query($con,"SELECT *  FROM user_information where username = '$_POST[user]' AND password = '$_POST[pass]'") ;
	$row = mysqli_fetch_array($query);
	if(!empty($row['username']))
	{
		$_SESSION['username'] = $row['username'];
		header("Location: template.php");

	}
	else
	{
		header("Location: signin.php");
	}
}

?>

