<?php
session_start();
if (isset($_SESSION['email'])) 
{
$email=$_SESSION['email'];  
}
$conn=mysqli_connect("127.0.0.1","root","root","kyd");
$medicine1=$_POST['m1'];
$medicine2=$_POST['m2'];
$medicine3=$_POST['m3'];
$medicine4=$_POST['m4'];
$medicinet=$medicine1.$medicine2.$medicine3.$medicine4;
$total=$_POST['gt'];
$email=$_SESSION['email'];
 $dataTime = date("Y-m-d H:i:s");

$query = mysqli_query($conn,"INSERT INTO ordermed(patientemail,medicines,gt,Time) VALUES('$email','$medicinet','$total','$dataTime')");
$query = mysqli_query($conn,"INSERT INTO order1(patientemail,medicines,gt,Time) VALUES('$email','$medicinet','$total','$dataTime')");
if(mysqli_affected_rows($conn)>0)
{
	header('location: finalorder.php');
}
else{
	echo "no";
}
?>