 <?php 
session_start();
$dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = 'root';
        $dbName     = 'kyd';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
   
if (isset($_SESSION['email'])) {

  $id=$_SESSION['email'];
  
}
else
{
header('Location: login1.php');
}
?> 
 <?php
 
$fname=mysqli_real_escape_string($db,$_POST['fn']);
	$lname=mysqli_real_escape_string($db,$_POST['ln']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$dob=mysqli_real_escape_string($db,$_POST['date']);
	$contact=mysqli_real_escape_string($db,$_POST['cn']);
	$username=mysqli_real_escape_string($db,$_POST['uname']);
	
	$gender=mysqli_real_escape_string($db,$_POST['gender']);
	
	 $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

	
		
	 $insert = $db->query("UPDATE kyd.labreg 
	 SET firstname='$fname' ,
	 lastname='$lname' ,
	 email='$email',
	 gender='$gender'
	,dob='$dob' ,
	username='$username',
	contactinfo='$contact',
	image='$imgContent' WHERE email='$id'");
		

	

	if($insert)
	{
				//header('Location: ret2.php');   
					echo"Record UPDATEed ";
					echo '<br>';
					echo '<a href="ret2.php">Display Profile</a>';
					
					 
					
    }
	else{
        echo "Please select an image file to upload.";
    }

?>