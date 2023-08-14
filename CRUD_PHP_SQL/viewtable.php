<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>home</title>
</head>
<body>
    <div class="container mt-4">
    <button type="submit" class="btn btn-primary" onclick="window.location.href = 'insert.php';">Add User</button>
    <br><br>
    <table class="table table-striped col-8 justify-content-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "connection.php";

    // SELECT query
    $sql = "SELECT * FROM users";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if (!$result) {
        die ("Query Faild" . mysqli_error());
    }
    else {
        while ($row = mysqli_fetch_array($result)){
            ?>
             <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['firstname']; ?></td>
      <td><?php echo $row['lastname']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['age']; ?></td>
      <td><a href="./update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
      <td><a href="./delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    
    <?php
        }
    }
    
    ?>
   
  </tbody>
</table>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>