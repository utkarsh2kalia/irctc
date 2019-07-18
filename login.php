<?php 
session_start();
$a=$_POST['x'];
$b=$_POST['y'];
if($a=="" || $b=="")
{
echo "fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("railways");
$query="SELECT * FROM passengers WHERE username='$a' AND password='$b'";
mysql_query($query);
$con=mysql_affected_rows();
if($con!=0)
{
$_SESSION['name']=$a;
header("location:welcome.php");
}
else
{
echo "no match";
}
}
?>
