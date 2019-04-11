<?php

include('tables.html');?>
<?php
    mysql_connect('localhost','root','root');
    mysql_select_db("kyd");

	$_sy = $_POST['tname'];

$myArray = explode(',', $_sy);
echo "<div style='margin-left: 80px;margin-right: 180px;  font-family:monospace; font-size: 17pt'>";
echo "List Of Probable Diseases ";
echo "<textarea cols='5'>";
foreach($myArray as $my_Array)
{
	$result=mysql_query("SELECT disease FROM s_db WHERE symptoms1='$my_Array' || symptoms2 = '$my_Array' || symptoms3 = '$my_Array'");
 
	while ($row = mysql_fetch_array($result))   
   {
	echo $row['disease'];
	
	echo "\n";

   }
	
	  
	
   }
   echo "</textarea>";
   
   echo "Home Remedies are ";
   
   echo "<div style='margin-left: 0px;margin-right: 0px;  font-family:monospace; font-size: 17pt; height:18pt;'>";
echo "<textarea cols='10'>";
   
   foreach($myArray as $my_Array)
	{
	$result=mysql_query("SELECT precautions FROM s_db WHERE symptoms1='$my_Array' || symptoms2 = '$my_Array' || symptoms3 = '$my_Array'");
 
	while ($row = mysql_fetch_array($result))   
   {
			echo $row['precautions'];
			echo "\n";
		
   }
	   
	 	
   }
   echo "</textarea>";
?>
