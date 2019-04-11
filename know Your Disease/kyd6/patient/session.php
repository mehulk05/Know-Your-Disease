<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysql_connect("localhost", "root", "root");
// Selecting Database
$db = mysql_select_db("kyd", $conn);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select email from patientfrofile where email='$user_check'", $conn);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['email'];
echo $user_check;


if(!isset($login_session)){
mysql_close($conn); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>