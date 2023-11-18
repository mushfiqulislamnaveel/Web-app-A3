<?php
	$fName = $_POST['fName'];
	$email = $_POST['email'];
	$msg = $_POST['message'];
    // echo $name;
    // echo $email;
    // echo $msg;

	// Database connection
	$link = mysqli_connect("localhost","root"," ","contactform");

    //check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    $sql = "INSERT INTO info (fName, email, msg) VALUES ('$fName', '$email', '$msg')";

    if(mysqli_query($link, $sql)){
        echo "Records added succesfully"
    }else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>