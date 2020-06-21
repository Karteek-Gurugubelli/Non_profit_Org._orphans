<?php

$id = filter_input(INPUT_POST,'id');
$fname = filter_input(INPUT_POST,'fname');
$lname = filter_input(INPUT_POST,'lname');
$gender = filter_input(INPUT_POST,'gender');
$age = filter_input(INPUT_POST,'age');
$phoneno = filter_input(INPUT_POST,'phoneno');
$email = filter_input(INPUT_POST,'email');
$address = filter_input(INPUT_POST,'address');
if(!empty($id)){
	if (!empty($fname)){
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
	$sql = "INSERT INTO volunteer(id,fname,lname,gender,age,phoneno,email,address)
	value ('$id','$fname','$lname','$gender','$age','$phoneno','$email','$address')";
	if ($conn->query($sql)){
	echo"new record is inserted successfully";
	}
	else{
	echo"Error: " . sql ."<br>". $conn->error;
	}
	$conn->close();
	}
}
}
?>