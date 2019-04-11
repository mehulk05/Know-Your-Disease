<?php
$name=$_POST['PatientName'];
$phone=$_POST['Number'];
$email=$_POST['email'];

$date=$_POST['date'];
$department=$_POST['Disease'];
$gender=$_POST['gender'];
$time=$_POST['Time'];

$con=@mysql_connect("localhost","root","root") or die(mysql_error());
$db=@mysql_select_db("kyd",$con)or die(mysql_error());
$str="insert into labappointment values('$name','$phone','$email','$date','$department','$gender','$time')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Thank you for registeration !! <br>';
header("Location:labreports.php"); 
}
else
{
	echo'eror';
}
?>
<html>
<br>
<a href="index.php"><b>Click here to return to the main page</b></a>
</html> 	