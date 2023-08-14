<?php
include "connection.php";


// Check if form has been submitted
if(isset($_POST["add"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    // SQL query to insert data
    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `age`) VALUES ('$fname','$lname','$email','$age')";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Query Failed: " . mysqli_error());
    }
    else {
         header("Location: viewtable.php");;
    }

}


?>