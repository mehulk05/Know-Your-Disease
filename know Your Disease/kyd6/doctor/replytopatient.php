<?php

$con = mysql_connect("localhost","root","root");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("kyd", $con);

 

$sql="SELECT * FROM askquestion WHERE id ='$id'";
$result=mysql_query($sql);

while($row3 = mysql_fetch_array($result))
{  
$email=$row3['email'];
}
?>
<form>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
   <td valign="top"><div align="left"><h5>Email: </div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
</table>
</form>
