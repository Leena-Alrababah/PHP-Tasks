<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        
    <?php 
    include "connection.php";

    
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
        // SELECT query
    $sql = "SELECT * FROM `users` where `id` = '$id'" ;

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if (!$result) {
        die ("Query Faild" . mysqli_error());
    }
    else {
        $row = mysqli_fetch_array($result);

        //to check
        // print_r($row);
    }

    if(isset($_POST["update"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $age = $_POST["age"];

         // SQL query to insert data
        $sql = "UPDATE `users` SET `firstname`='$fname',`lastname`='$lname',`email`='$email',`age`='$age' WHERE `id` = '$id' ";

        $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Query Failed: " . mysqli_error($conn));
    }
    else {
        // echo "DONE!!!!!!!!!!!";
        header("Location: viewtable.php"); // Redirect to view.php
        exit(); // Make sure to exit after redirection
    }

    }

    ?>
    <form action="" method="post" class="col-8 justify-content-center mt-4">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" name="fname" value="<?php echo $row['firstname']; ?>" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" name="lname" value="<?php echo $row['lastname']; ?>" class="form-control" id="lastname" placeholder="Enter Last Name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" name="age" value="<?php echo $row['age']; ?>" class="form-control" id="age" placeholder="Age">
  </div>
  
  <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>