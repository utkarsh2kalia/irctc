<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/mysheet.css">
    <title>Railway Reservation website</title>

</head>
<body>
<?php
session_start();?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">Railway Reservation Website</span>
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['name'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="mybookings.php">My Bookings</a>
          <a class="dropdown-item" href="welcome.php">My Details</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
  </nav>
  <br>
<br>

<h2>Enter Booking Details</h2>
<br><br>

<form  method="POST" action="PNR.php">
<?php

$trainno=$_POST['options'];
$date=$_POST['date'];
$username=$_POST['session_name'];
$trainname=$_POST['trainname'];
$seats=$_POST['seats1'];




?>
<input id="prodI" name="trainno" type="hidden" value="<?php echo $trainno;?>">
<input id="prodI" name="username" type="hidden" value="<?php echo $username;?>">
<input id="prodI" name="date" type="hidden" value="<?php echo $date;?>">
<input id="prodI" name="trainname" type="hidden" value="<?php echo $trainname;?>">
<input id="prodI" name="seats2" type="hidden" value="<?php echo $seats;?>">








<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">First Name</label>
  <div class="col-10">
    <input class="form-control" type="text" name="firstname"  id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Last Name</label>
  <div class="col-10">
    <input class="form-control" type="text" name="lastname" id="example-text-input">
  </div>
</div>

<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email" name="email" id="example-email-input">
  </div>
</div>

<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Age</label>
  <div class="col-10">
    <input class="form-control" type="tel" name="age" id="example-tel-input">
  </div>
</div>

<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Seats</label>
  <div class="col-10">
    <input class="form-control" type="number" name="bookedseats"  id="example-number-input">
  </div>
</div>
<input class="btn btn-primary" type="submit" value="Submit">







</form>

</body>












<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
</html>