<?php

   $conn=mysql_connect("127.0.0.1","root","root");
   mysql_select_db("kyd",$conn);
      $UserName=$_POST['email'];
      $password=$_POST['password'];
      $query=mysql_query("SELECT * FROM labreg where email='$UserName' And password='$password'");
      
      $count=mysql_fetch_array($query);
      if($count)
      {
         session_start();
         $_SESSION['email']=$UserName;
         $_SESSION['password']=$password;
         header('Location: index.php');
         
      }
      else
      {
         echo "not registered";
      }
   
   mysql_close($conn);
?>