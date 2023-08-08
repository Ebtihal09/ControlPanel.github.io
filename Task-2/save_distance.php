<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "map";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 // Get the data from the POST request
$buttonName = $_POST['buttonName'];
$distance = $_POST['distance'];

// SQL query to insert the data into the database
$sql = "INSERT INTO directions (direction, distance) VALUES ('$buttonName', $distance)";

 // Execute the query
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>