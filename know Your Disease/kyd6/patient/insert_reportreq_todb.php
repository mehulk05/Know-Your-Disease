<?php include('Requestreports.php');?>
<?php

$db=mysqli_connect("localhost","root","root","kyd");
	
	
	$Disease=mysqli_real_escape_string($db,$_POST['disease']);
	$Report=mysqli_real_escape_string($db,$_POST['Report']);
	$Patient_Name=mysqli_real_escape_string($db,$_POST['name']);
	$Approved=mysqli_real_escape_string($db,$_POST['Approved']);

	$Pemail=mysqli_real_escape_string($db,$_POST['Pemail']);
	$Demail=mysqli_real_escape_string($db,$_POST['Docmail']);
	$LBemail=mysqli_real_escape_string($db,$_POST['labemail']);

	
	$contact=mysqli_real_escape_string($db,$_POST['Contact']);
	
	
	
		
	mysqli_query($db,"INSERT INTO lab_report_request (Disease, Reports, Patient_Name, Patient_Mail, Approved_By_Dcotor, Dcotor_Mail, Lab_tech_mail, contactinfo)
		VALUES('$Disease','$Report','$Patient_Name','$Pemail','$Approved','$Demail','$LBemail','$contact')");

	

	if(mysqli_affected_rows($db)>0)
	{
		 $_SESSION['message'] = 'succes';
   



	}
	else
	{
		echo"rownotadded".mysqli_error($db);	
	}


mysqli_close($db);
?>
