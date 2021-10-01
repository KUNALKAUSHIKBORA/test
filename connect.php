<?php
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	
	$number = $_POST['number'];
	$address = $_POST['address'];
	$qualification = $_POST['qualification'];

	// Database connection
	$conn = new mysqli('localhost', 'root', '123456789', 'test');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(name, fname, gender, email, number, address, qualification) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssiss",$name, $fname, $gender, $email, $number, $address, $qualification);
		$stmt->execute();
		echo "registration successfull";
		$stmt->close();
		$conn->close();
	}
?>