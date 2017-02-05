<?php
    if($_SESSION['username'])
	{	SESSION_START();

    //checking if data has been entered
    if( isset( $_POST['stars'] ) && !empty( $_POST['stars'] ) )
    {
        $data = $_POST['stars'];
	$comm = $_POST['comments'];
    } else {
        header( 'location: insert.php' );
        exit();
    }

    //setting up mysql detail

    //connecting to sql database
    $mysqli = new mysqli( "localhost","root","","record" ) or die( $mysqli->error );

    //inserting details into table
    $insert = $mysqli->query( "INSERT INTO Q1 VALUE ( '$data','$comm' )" );

    //closing mysqli connection
    $mysqli->close;
    }
    else
	header("Location: signin.php");
?>
