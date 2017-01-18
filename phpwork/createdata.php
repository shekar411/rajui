<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO data (fname, lname, bday)
VALUES ('raja', 'bandla', 'rajashekar411@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>