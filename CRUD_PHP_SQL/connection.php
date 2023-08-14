<?php
$dbhost = "localhost";          // Change this to your MySQL server hostname
$username = "root";    // Change this to your MySQL username
$password = "";    // Change this to your MySQL password
$dbname = "new_database";      // Change this to your existing database name

// Create connection
$conn = mysqli_connect ($dbhost, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
