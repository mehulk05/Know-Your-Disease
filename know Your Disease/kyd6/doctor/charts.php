<?php session_start();

   $conn=mysql_connect("127.0.0.1","root","root","kyd");
   //mysql_select_db("kyd",$conn);
   
if (isset($_SESSION['email'])) {

  $id=$_SESSION['email'];
  
  
 
}
else
{
header('Location: login1.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<style>
img {
  border-radius: 50%;
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Welcome <?php echo  $_SESSION['email']; ?> </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
	  
	  
	  
	 

         <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">26 New Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">11 New Tasks!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">123 New Orders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
   
	  
	  <br>
	  <br>
	  <div align="center">
	  <h1> Edit Profile</h1>
	  
	  <div style="position: relative; align:center;  ">
	 
<img src="../img.png" alt="Avatar" style="width:200px">

       
        <form action="upload2.php" method="post" enctype="multipart/form-data">
        Select image to upload:<br><br>
        <input type="file" name="image"/><br><br>
        <input type="submit" name="submit" value="UPLOAD"/>
    

	
	
<?php


		
        
      
	
//session_start(); // Starting Session

 $result3 = mysql_query("SELECT * FROM kyd.doctor WHERE email='$id'");
if (!$result3) {
    die(mysql_error());
}

while($row3 = mysql_fetch_array($result3))
{  
$fname=$row3['firstname'];
$lname=$row3['lastname'];
$username=$row3['username'];
$address=$row3['address'];
$gender=$row3['gender'];
$email=$row3['email'];
$contact=$row3['contactinfo'];
$dob=$row3['dob'];
$speciality=$row3['speciality'];


}
?>

<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2"><h3>Your Profile Information</h3> </td>
  </tr>

  <tr>
  
    <td width="82" valign="top"><div align="left"><h5>FirstName:</div></td>
    <td width="165" valign="top"><?php echo $fname ?></h5></td><br>
  </tr>
  <tr>
    <td valign="top"><div align="left"><h5>LastName:</div></td>
    <td valign="top"><?php echo $username ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><h5>User Name:</div></td>
    <td valign="top"><?php echo $lname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><h5>Gender:</div></td>
    <td valign="top"><?php echo $gender ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><h5>Address:</div></td><br>
    <td valign="top"><?php echo $address ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><h5>Contact No.: </div></td>
    <td valign="top"><?php echo $contact ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><h5>D O B: </div></td>
    <td valign="top"><?php echo $dob ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><h5>Email: </div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
  
   <tr>
    <td valign="top"><div align="left"><h5>speciality:</div></td><br>
    <td valign="top"><?php echo $speciality ?></td>
  </tr>
</table>
	</div>  
      
	 </div>
    </div>
	
	
	
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
  
</body>

</html>
