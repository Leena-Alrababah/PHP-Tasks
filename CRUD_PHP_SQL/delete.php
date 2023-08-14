<?php
include "connection.php"; // Include your database connection logic

// Check if form has been submitted
if(isset($_GET["id"])){
    $id = $_GET["id"];

    // SQL query to delete data based on ID
    $sql = "DELETE FROM `users` WHERE `id`='$id'";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Query Failed: " . mysqli_error($conn));
    }
    else {
        header("Location: viewtable.php"); // Redirect to view.php
    }
}
?>
