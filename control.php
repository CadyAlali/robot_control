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

if (isset($_GET['direction'])) {
    $direction = $_GET['direction'];
    $sql = "INSERT INTO directions (direction) VALUES ('$direction')";

    if ($conn->query($sql) === TRUE) {
        echo "Direction recorded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
