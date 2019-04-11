<?php session_start();

   
   
if (isset($_SESSION['email'])) {

  $email=$_SESSION['email'];
}
  ?>
<?php include('Requestreports.php');?>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "kyd";
$disease = $_POST['disease'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM s_db WHERE disease='$disease'";
$result = $conn->query($sql);

echo "<div style='margin-left: 80px;margin-right: 180px;  font-family:monospace; font-size: 17pt'>";
echo "List Of Tests To Be Done";
echo "<textarea cols='3'   rows='5'>";

if ($result->num_rows > 0)
 {
    // output data of each row
    while($row = $result->fetch_assoc())
     {
        echo   $row["kyd_Reports"]. "<br>";
        echo "</textarea>";

    ?>
     <form onsubmit ="bs.php">
    <button >
    <a href ="afterprocessreport_requestreports.php?email=<?php echo $email;?>&id=<?php echo $row['id'];?>">  Request Lab Reports</a></button><br>
        <?php echo"</td><td>";?>
        
        </form>
<?php 
   }
} 
else
 {
    echo "0 results";
}
$conn->close();
?>