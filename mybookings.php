<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
	
	
	
	
	
	
	
	
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/mysheet.css">
    <title>Railway Reservation website</title>
<?php session_start();?>
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
<h2>Your Bookings</h2>
<body>
<form  method="POST" action="cancel.php">



<table border="3" class="table">
<thead class="thead-dark">
<div id="dvContainer">
<tr><th>Train number</th><th>Train name</th><th>Name</th><th>UserID</th><th>Journey Date</th><th>PNR no.</th><th>Booked Seats</th></tr>
</thread>
<tr class="table-info">


<?php
$username=$_SESSION['name'];
$seats=$_POST['seats'];
mysql_connect("localhost","root","");
mysql_select_db("railways");
$query="SELECT * FROM bookings WHERE username='$username'";


$result= mysql_query($query);








while($row=mysql_fetch_array($result))
{

?>
<tr>
<td>


<div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" value="<?php echo $row[0];?>" autocomplete="off" checked> SELECT
  </label>  <?php echo $row[4];?>
  </div>
</td>

<?php

echo "<td>".$row[3]."</td>";


echo "<td>".$row[0]." ".$row[1]."</td>";
echo "<td>".$row[2]."</td>";

echo "<td>".$row[5]."</td>";
echo "<td>".$row[6]."</td>";
echo "<td>".$row[8]."</td>";
?>
</div>
<input id="prodI" name="PNR" type="hidden" value="<?php echo $row[6];?>">
<input id="prodI" name="date" type="hidden" value="<?php echo $row[5];?>">
<input id="prodI" name="trainno" type="hidden" value="<?php echo $row[4];?>">
<input id="prodI" name="bookedseats" type="hidden" value="<?php echo $row[8];?>">


</tr>
<?php
}




?>
</table>
<br><br>
<center>
<input class="btn btn-primary" type="submit" value="Cancel Ticket">

</center>

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









