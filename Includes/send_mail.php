<?php

if(isset($_POST['signup'])){
 
  require 'phpmailer\PHPMailerAutoload.php';

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'foodcall3002@gmail.com';                 // SMTP username
  $mail->Password = 'foodcall@1234';                           // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465;                                   // TCP port to connect to
  $mail->setFrom('chaitanyadave23@gmail.com', 'Chaitanya');
  $mail->addAddress($_POST['email']);   // Add a recipient
  $mail->isHTML(true);

  $otp=mt_rand(100000,999999);                                 
  setcookie('otp',$otp);
  $mail->Subject = 'Food Call Verification Email';
  $mail->Body = "<div class='container'>
    <div class='alert alert-success' role='alert'>
    <h4 class='alert-heading'>Hi!</h4>
    <p>Thanks for getting started  with us! We need a little more information to complete your registration, including confirmation of your Email address. </p>
    <hr>
    <p>Your OTP is: $otp !.</p>
    </div>
    </div>";

  if(!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
       echo "<script>
          window.location = 'http://localhost/food-call/verification.php';      
       </script>";
  }
}

?>