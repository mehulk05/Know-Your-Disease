<?php
$db=mysqli_connect("localhost","root","root","kyd");
	
	
	$fname=mysqli_real_escape_string($db,$_POST['fn']);
	$lname=mysqli_real_escape_string($db,$_POST['ln']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$dob=mysqli_real_escape_string($db,$_POST['date']);
	$contact=mysqli_real_escape_string($db,$_POST['cn']);
	$username=mysqli_real_escape_string($db,$_POST['uname']);
	$password=mysqli_real_escape_string($db,$_POST['pass']);

	$address=mysqli_real_escape_string($db,$_POST['address']);
	$gender=mysqli_real_escape_string($db,$_POST['gender']);
	
		
	mysqli_query($db,"INSERT INTO labreg(firstname,lastname,email,gender,dob,username,password,address,contact)
		VALUES('$fname','$lname','$email','$gender','$dob','$username','$password','$address','$contact')");

	

	if(mysqli_affected_rows($db)>0)
	{
		header('location: index.php');



	}
	else
	{
		echo"rownotadded".mysqli_error($db);	
	}


mysqli_close($db);
?>
