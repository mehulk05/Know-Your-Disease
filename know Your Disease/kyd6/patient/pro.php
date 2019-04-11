<?php session_start();
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


		
        
      
	
//session_start(); // Starting Session

 $result3 = mysql_query("SELECT * FROM kyd.patientfrofile WHERE id=2");
if (!$result3) {
    die(mysql_error());
}

while($row3 = mysql_fetch_array($result3))
{  
$fname=$row3['firstname'];
$lname=$row3['lastname'];
$address=$row3['email'];
$contact=$row3[''];
//$picture=$row3['image'];
$gender=$row3[''];

}
?>
<html>
</body>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
	<td><div align="right"><a href="index.php">logout</a></div></td>
  </tr>
  <tr>
    <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="100%" height="129" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><?php echo $fname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><?php echo $lname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top"><?php echo $gender ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Address:</div></td>
    <td valign="top"><?php echo $address ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Contact No.: </div></td>
    <td valign="top"><?php echo $contact ?></td>
  </tr>
</table>
<p align="center"><a href="index.php"></a></p>

