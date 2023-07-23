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
    // SQL query to get the last inserted data
    $sql = "SELECT direction_robot FROM direction ORDER BY id DESC LIMIT 1";

    // Execute the query
    $result = $conn->query($sql);

    // Check if the query returned a result
    if ($result->num_rows > 0) {
        // Output the last inserted data
        while($row = $result->fetch_assoc()) {
            echo $row["direction_robot"];
        }
    } else {
        echo "No results";
    }

    // Close the connection
    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title> Display Page</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        p {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>

<body>
   
</body>
</html>