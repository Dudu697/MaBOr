<?php

$conn = mysqli_connect("localhost", "root", "mysql", "html_form");

        // Check connection
if($conn === false){
      die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

        // Taking all 5 values from the form data(input)
	$uname =  $_REQUEST['uname'];
	$pswd = $_REQUEST['pswd'];
	password_hash($pswd, PASSWORD_BCRYPT);

        // Performing insert query execution
        // here our table name is college
$sql = "INSERT INTO login VALUES ('$uname',
      '$pswd')";



if(mysqli_query($conn, $sql)){
	
} else{
      echo "ERROR: Hush! Sorry $sql. "
      . mysqli_error($conn);
}

        // Close connection
mysqli_close($conn);
?>