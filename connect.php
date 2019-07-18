<?php

$xx=$_POST['a'];
$yy=$_POST['b'];
$zz=$_POST['c'];
$vv=$_POST['d'];
$qq=$_POST['e'];
$ss=$_POST['f'];


if($xx=="" || $yy=="" || $zz=="" || $vv=="" || $qq=="" || $ss=="")
{
echo"fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("railways");
$query="SELECT * FROM passengers WHERE username='$zz' AND password='$vv'";
$result=mysql_query($query);

if(mysql_affected_rows()==0)
{
$query1="INSERT into passengers(firstname,lastname,username,password,state,phone) VALUES ('$xx','$yy','$zz','$vv','$qq','$ss')";
mysql_query($query1);
header("location:signedup.php");

}
else
{
echo "user exists";
}
}
?>
