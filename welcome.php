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
<body class="bbd">
<?php session_start();
isset($_SESSION['name']);
?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">Railway Reservation Website</span>
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['name'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="mybookings.php">My Bookings</a>
          <a class="dropdown-item" href="welcome.php">Book Train</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
  </nav>
<center>
 


  
<br><br><br>
<form class="abc" action="trains.php" method="POST">



  <div class="form-group1">
      <label for="exampleFormControlSelect1">Select Source</label>
      <select class="form-control" name="x"  id="exampleFormControlSelect1">
        <option>Delhi</option>
        <option>Mumbai</option>
        <option>Kolkata</option>
        <option>Jammu</option>
        <option>Chennai</option>
      </select>

    </div>




    <div class="form-group">
    <label for="exampleFormControlSelect1">Select Destination</label>
    <select class="form-control" name="y" id="exampleFormControlSelect1">
      <option>Dehradun</option>
      <option>Bengaluru</option>
      <option>Ranchi</option>
      <option>Patna</option>
      <option>Chandigarh</option>
    </select>
  </div>



  <div class="vv">

Select Date within 5 Days
<br><br>
<div class="form-group row">
<label for="example-date-input" class="col-2 col-form-label"></label>
<div class="col-10">
  <input class="form-control" type="date" value="" name="z" id="example-date-input">
</div>
</div>
</div>

  <br><br>
  <button type="submit" class="btn btn-primary">Submit</button>



  </form>

  </center>
























































<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
