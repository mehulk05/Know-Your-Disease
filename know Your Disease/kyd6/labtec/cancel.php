<?php


$email=$_GET['email'];
$id=$_GET['id'];



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "kyd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE  lab_report_request SET status='no' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
   
    echo "Record updated successfully";
     echo "<br><br><a href='reportdisplay.php'>Go Back</a>";
    
} else {
    echo "Error updating record: " . $conn->error;
    echo "<br><br><a href='reportdisplay.php'>Go Back</a>";
}

$conn->close();

//echo $email;
//die();
//$query=mysql_query("select * from patientfrofile where email='$email'");

//$row=mysql_fetch_array($query);

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "tylerxyz4@gmail.com";
  $mail->Password = "mehul03071997";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "tylerxyz4@gmail.com";
  $mail->FromName = "Kyd Support";
  
  $mail->addAddress($email);
  
  $mail->isHTML(true);
 
  $mail->Subject = "test mail";
  $mail->Body = "<b>we will not be able to work on your request</b>";
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
    
   echo "Message has been sent successfully<br><br><br>";?>
  <button >
    <a href = "reportdisplay.php">  Confirmed And Go BAck</a></button><br>
<?php
  }
