<?php
		$conn = mysqli_connect("localhost", "root", "", "canteen");
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
?>