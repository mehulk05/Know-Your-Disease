<?php session_start();

   
   
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
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "kyd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE order1 SET Approved='Yes' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header('Location: chemistapprove.php');	
    echo "Record updated successfully";
     echo "<br><br><a href='chemistapprove.php'>Go Back</a>";
    
} else {
    echo "Error updating record: " . $conn->error;
    echo "<br><br><a href='chemistapprove.php'>Go Back</a>";
}

$conn->close();
?>

