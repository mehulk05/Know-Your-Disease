<?php // Includes Login Script

if(isset($_SESSION['email']))
{
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <style type="text/css">
    
   Button{
width:60%;

background-color:#FFBC00;
color:#fff;
border:2px solid #FFCB00;
padding:10px;
font-size:18px;
cursor:pointer;
border-radius: 12px;
margin-top:10px;
margin-right:21px;
margin-bottom:15px;
}
 input[type=submit]{
width:100%;
background-color:#0000FF;
color:#fff;
border:2px solid #FFCB00;
padding:10px;
font-size:16px;
cursor:pointer;
border-radius:5px;
margin-top:10px;
margin-right:21px;
margin-bottom:15px;
}
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

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
	  
	  
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="pass" type="password" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <input type="submit" value="login" name="login" >
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="registerhtm.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
          <div align="center"><br><form>
        	<button ><a href ="http://localhost/kyd6/patient/login1.php">  Login As Pateint</a></button><br><?php echo" <br>";?>
        	<button ><a href ="http://localhost/kyd6/chemist1/login1.php">  Login As Chemist</a></button><br><?php echo" <br>";?>
        	<button  ><a href ="http://localhost/kyd6/doctor/login1.php">Login As LabTechnician</a></button><br><br><br>

      </div></form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
