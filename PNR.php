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
  <br>
<br>
<h2>Ticket Booked Successfully</h2>
<body>
<form  method="POST" action="cancel.php">
<?php
session_start();
$trainno=$_POST['trainno'];
$date=$_POST['date'];
$username=$_POST['username'];
$trainname=$_POST['trainname'];
$seats=$_POST['seats2'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$bookedseats=$_POST['bookedseats'];


mysql_connect("localhost","root","");
mysql_select_db("railways");
$seats=$seats-$bookedseats;

$query="UPDATE alltrains set seats='$seats' WHERE date='$date' AND trainno='$trainno'";
$result2=mysql_query($query);
$query1="INSERT INTO bookings(firstname,lastname,username,trainname,trainnumber,date,email,bookedseats) VALUES('$firstname','$lastname','$username','$trainname','$trainno','$date','$email','$bookedseats')";

$result=mysql_query($query1);

$query2="SELECT * FROM bookings WHERE username='$username' AND firstname='$firstname' AND lastname='$lastname' AND date='$date' AND trainnumber='$trainno'";

$result1=mysql_query($query2);

$row=mysql_fetch_array($result1);
?>
<table border="3" class="table">
<thead class="thead-dark">
<tr><th>Train number</th><th>Train name</th><th>Name</th><th>UserID</th><th>Journey Date</th><th>PNR no.</th><th>Booked seats</th></tr>
</thread>

<tr class="table-info">
<?php

echo "<td>".$row[4]."</td>";
echo "<td>".$row[3]."</td>";


echo "<td>".$row[0]." ".$row[1]."</td>";
echo "<td>".$row[2]."</td>";

echo "<td>".$row[5]."</td>";
echo "<td>".$row[6]."</td>";
echo "<td>".$row[8]."</td>";



?>
</tr>
</table>


<input id="prodI" name="PNR" type="hidden" value="<?php echo $row[6];?>">
<input id="prodI" name="date" type="hidden" value="<?php echo $row[5];?>">
<input id="prodI" name="seats" type="hidden" value="<?php echo $seats;?>">
<input id="prodI" name="bookedseats" type="hidden" value="<?php echo $bookedseats;?>">
<input id="prodI" name="trainno" type="hidden" value="<?php echo $trainno;?>">
<input class="btn btn-primary" type="submit" value="Cancel Ticket">


</form>


<form method="POST" action="mybookings.php">

<input id="prodId" name="username" type="hidden" value="<?php echo $username;?>">
<input id="prodI" name="bookedseats" type="hidden" value="<?php echo $bookedseats;?>">
<input id="prodI" name="trainno" type="hidden" value="<?php echo $trainno;?>">

<input class="btn btn-outline-info" type="submit" value="My Bookings">

</form>

















<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
