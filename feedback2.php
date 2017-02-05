<?php

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rating</title>  
</head>
<body>

<h1 align ="center"> FEEDBACK FORM </h1>

<body bgcolor="#E6E6FA">

    <p align="center"> Q.9) Please rate this item: </p>
        <div align="center">
<form method="post" >
        <input type="radio" name="stars" id="1" value="1" >
        <label class="stars" for="1">1</label>
        <input type="radio" name="stars" id="2" value="2" >
        <label class="stars" for="2">2</label>
        <input type="radio" name="stars" id="3" value="3" >
        <label class="stars" for="3">3</label>
        <input type="radio" name="stars" id="4" value="4" >
        <label class="stars" for="4">4</label>
        <input type="radio" name="stars" id="5" value="5" required>
        <label class="stars" for="5">5</label>
<div>
<table align="center">
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 
 <td valign="top">
  <textarea  name="comments" maxlength="10000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Next" name = "sub">
 </td>
</tr>

<table>
</form>
</body>
</html>
<?php
		SESSION_START();
		$r = $_SESSION['username'];
	if(isset($_REQUEST['sub'])){
		if( isset( $_POST['stars'] ) && !empty( $_POST['stars'] ) )
    {
        $data = $_POST['stars'];
	$comm = $_POST['comments'];
echo $data;
    }
    //setting up mysql detail

    //connecting to sql database
    $mysqli = new mysqli( "localhost","root","","record" ) or die( $mysqli->error );

    //inserting details into table
$select="INSERT INTO Q2 VALUES ( '$r','$data','$comm' )";
      echo $select;
return;

    $insert = $mysqli->query($select );
if($mysqli->affected_rows())
{echo "jj";}
    //closing mysqli connection
    }
	if($_SESSION['username'])
	{
	}
	else
	header("Location : signin.php");
?>
