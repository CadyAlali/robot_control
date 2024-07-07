<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_control";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT direction FROM directions ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the last row
    $row = $result->fetch_assoc();
    echo $row["direction"];
} else {
    echo "No data found";
}

$conn->close();
?>
