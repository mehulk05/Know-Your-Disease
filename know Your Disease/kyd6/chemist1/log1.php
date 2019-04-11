<?php
session_start(); // Starting Session
if(!empty($_SESSION['email'])&&isset($_SESSION['email'])
{
	header('Location: index.php');
}

?>