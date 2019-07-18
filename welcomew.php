<?php 
session_start();
if(isset($_SESSION['name']))
{
echo"YOU HAVE SUCCESSFULLY LOGGGED IN ";


echo $_SESSION['name'];
echo "<a href='logout.php'>LOGOUT</a>";
}
else
{
header("location:form.php");
}
?>