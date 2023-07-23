<?php
    $servername = "localhost";
    $username = "root@";
    $password = " ";
    $dbname = "directions";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

     // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the data from the POST request
    $data = $_POST['button'];

    // SQL query to insert the data into the database
    $sql = "INSERT INTO direction (direction_robot) VALUES ('$data')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    




    $conn->close();

    
?>

