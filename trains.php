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
          <a class="dropdown-item" href="#">My Details</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
  </nav>
  <br>
<br>
<form method="POST" action="book.php">
<table class="table" border="3">
<thead class="thead-dark">
<tr><th>trainno</th><th>trainname</th><th>source</th><th>destination</th><th>departure</th><th>arrival</th><th>seats</th></tr>
</thread>
<?php

$d=$_POST['x'];
$e=$_POST['y'];
$f=$_POST['z'];
echo $f;
echo $_SESSION['name']; 
    						
if($d=="" || $e=="")
{
echo"fill all";
echo $d;
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("railways");
$query="SELECT * FROM alltrains WHERE source='$d' AND destination='$e' AND date='$f'" ;
$result=mysql_query($query);

while($row=mysql_fetch_array($result))
{

?>
<tr>
<td>


<div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" value="<?php echo $row[0];?>" autocomplete="off" checked> SELECT
  </label>  <?php echo $row[0];?>
</td>

<input id="prodI" name="trainname" type="hidden" value="<?php echo $row[1];?>">
<?php
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>"; ?>
<input id="prodId" name="date" type="hidden" value="<?php echo $row[7];?>">
<input id="prodIa" name="seats1" type="hidden" value="<?php echo $row[6];?>">
<input id="prodI" name="session_name" type="hidden" value="<?php echo $_SESSION['name'];?>">


<?php
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "<td>".$row[6]."</td>";
?>
</tr>
<?php
}



}
?>
</table>
<br><br><br>

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