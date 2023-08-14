<?php
$servername = "localhost";       // Change this to your MySQL server hostname
$username = "root";     // Change this to your MySQL username
$password = "";     // Change this to your MySQL password

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create a new database
$dbname = "new_database";       // Change this to your desired database name
$sql = "CREATE DATABASE $dbname";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
