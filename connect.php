<?php
   

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$staffOrStudent = $_POST['staffOrStudent'];
	$studentOrStaffId = $_POST['studentOrStaffId'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];


	// Database connection
	$conn = new mysqli('db4free.net','rahmatabc12','rahmatabc12','rahmatabc12');

	$sql = "INSERT into registration(firstName, lastName, gender, staffOrStudent, studentOrStaffId, email, number, address, contact) VALUES ('$firstName', '$lastName', '$gender', '$staffOrStudent', '$studentOrStaffId', '$email', '$number', '$address', '$contact')";

	if ($conn->query($sql) === TRUE) {
		echo "Registration Successful";
	}
	else {
		echo "Error:".$sql."<br>".$conn->error;
	}

    

?>
<!-- 
$stmt->bind_param("", $firstName, $lastName, $gender, $staffOrStudent, $studentOrStaffId, $email, $number, $address, $contact); -->