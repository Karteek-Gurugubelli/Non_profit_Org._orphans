<?php

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');
$message = filter_input(INPUT_POST,'message');

if(!empty($name)){
	if (!empty($email)){
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "org";
	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
	if (mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_error() .') '
     . mysqli_connect_error());
	}
	else{
	$sql = "INSERT INTO comment(name,email,message)
	value ('$name','$email','$message')";
	if ($conn->query($sql)){
	echo"new record is inserted successfully";
	}
	else{
	//echo"Error: " . sql ."<br>". $conn->error;
	}
	$conn->close();
	}
}
}
?>