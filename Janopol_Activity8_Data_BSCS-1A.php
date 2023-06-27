<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "lab";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}

$name = $_POST['name']; 
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO items (name, email, message) VALUES (?, ?, ?)"; 
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
	echo "Form data saved successfully.";
} 
else {
	echo "Error: ". $stmt->error;
}

$stmt->close();
$conn->close();

?>