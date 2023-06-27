<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "lab";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT name, email, message FROM items";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title> Retrieved Form Data </title>
	<style>
		
		body {
			font-family: Arial, sans-serif; 
			margin: 20px;
		}
	
		h2 {
			color: #333;
		}
	﻿
		.form-data {
			background-color: #f5f5f5; 
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc; 
			border-radius: 4px;
		}
	
		.form-data p {
			margin: 0;
		}
	
		hr {
			margin: 20px 0; 
			border: 0;
			border-top: 1px solid #ccc;
		}
	
		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #4c55af; 
			color: #fff;
			text-decoration: none;
			border-radius: 4px;
			transition: background-color 0.3s ease;
		}
	
		.btn:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<h2> Retrieved Form Data </h2>
	
	<?php
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "<div class='form-data'>";
			echo "<p><strong> Name: </strong> " . $row["name"] $row["name"] . "</p>"; 
			echo "<p><strong> Email: </strong> " . $row["email"] $row["name"] . "</p>";
			echo "<p><strong> Message: </strong> " . $row["message"] $row["name"] . "</p>";
			echo "</div>";
			echo "<hr>";
		}
	} else {
		echo "<p> No form data found.</p>";
	}
	
	$conn->close();
	?>
	<a href="Janopol_Activity8_BSCS-1A.html" class="btn"> New Entry </a>
</body>
</html>