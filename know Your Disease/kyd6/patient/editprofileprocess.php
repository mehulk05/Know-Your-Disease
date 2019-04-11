<?php session_start();

   $db=mysql_connect("127.0.0.1","root","root","kyd");
   //mysql_select_db("kyd",$db);
   
if (isset($_SESSION['email'])) {

  $id=$_SESSION['email'];
 // echo $id;
}
else
{
header('Location: login1.php');
}
?>
<?php
$fname=mysql_real_escape_string($_POST['fn']);
	$lname=mysql_real_escape_string($_POST['ln']);
	$email=mysql_real_escape_string($_POST['email']);
	$dob=mysql_real_escape_string($_POST['date']);
	$contact=mysql_real_escape_string($_POST['cn']);
	$username=mysql_real_escape_string($_POST['uname']);
	
	$gender=mysql_real_escape_string($_POST['gender']);
	
	 $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
	
	$sql=mysql_query("UPDATE 'patientfrofile' SET firstname='$fname',lastname='$lname',email='$email',gender='$gender',dob='$dob',
	username='$username',contactinfo='$contact',image='$imgContent' WHERE email='$id'",$db);
		
	if($sql)
	{
		 //header('Location: ret2.php');
echo"rownadded";

	}
	else
	{
		header('Location: ret2.php');
		echo"row is not added".mysql_error($db);	
	}


mysql_close($db);
?>
