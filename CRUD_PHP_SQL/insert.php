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
    <form action="./insertprocess.php" method="post" class="col-8 justify-content-center mt-4">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" name="fname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" name="lname" class="form-control" id="lastname" placeholder="Enter Last Name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" name="age" class="form-control" id="age" placeholder="Age">
  </div>
  
  <button type="submit" class="btn btn-primary" name="add">Submit</button>
</form>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>