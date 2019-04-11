<?php
session_start();
$conn=mysqli_connect("127.0.0.1","root","root","kyd");
$address=$_POST['ta'];
$email=$_SESSION['email'];

$query = mysqli_query($conn,"UPDATE ordermed SET address='$address' WHERE patientemail='$email'");
$query = mysqli_query($conn,"UPDATE order1 SET address='$address' WHERE patientemail='$email'");

if(mysqli_affected_rows($conn)>0)
{
	$query =mysqli_query($conn,"DELETE FROM ordermed WHERE patientemail='$email'");
	header('location: index.php');


}
else{
	echo "no";
}
?>