<?php
$db=mysqli_connect("localhost","root","root","kyd");
	
	
	
	$question=mysqli_real_escape_string($db,$_POST['question']);
	$name=mysqli_real_escape_string($db,$_POST['name']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
		
	mysqli_query($db,"INSERT INTO docreply(Question,name,email)
		VALUES('$question','$name','$email')");

	

	if(mysqli_affected_rows($db)>0)
	{
		echo "Message Sent ";
echo'<br>'
       echo '<a href="askreply.php">Vie2w your Messages</a>';

	}
	else
	{
		echo"rownotadded".mysqli_error($db);	
	}


mysqli_close($db);
?>
