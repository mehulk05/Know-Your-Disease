<?php session_start();

   $conn=mysql_connect("127.0.0.1","root","root","kyd");
   //mysql_select_db("kyd",$conn);
   
if (isset($_SESSION['email'])) {

  $id=$_SESSION['email'];
  echo $id;
}
else
{
header('Location: login1.php');
}
?>

<?php

$sql = "SELECT * FROM kyd.patientfrofile WHERE email='$id'";
$result = mysql_query($sql);
if (!$result) {
    die(mysql_error());
}

if($row = mysql_fetch_array($result)) {
    $username = $row["firstname"];
    $name = $row["lastname"];
    $email = $row["email"];
	
    echo "
    <table>
        <tr><td>User Name</td><td> : </td><td>$username</td></tr>
        <tr><td>Name</td><td> : </td><td>$name</td></tr>
        <tr><td>Email</td><td> : </td><td>$email</td></tr>
		  
    </table>
   
}
?>