<?php

mysql_connect("localhost","root","root");
mysql_select_db("kyd");
$email=$_GET['id'];
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
  $mail->Body = "<b>Your Appointment has been Canceled Due to Busy Schedules of Doctors..</b>".$row["password"];
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
	  
   echo "Message has been sent successfully";
   echo "<a href='Sent Mail to Patient Successfully'></a>";
  }
