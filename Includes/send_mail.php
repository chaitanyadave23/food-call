<?php

if(isset($_POST['signup'])){
 /* $_SESSION['firstname'] = $_POST['first_name'];
  $_SESSION['lastname'] = $_POST['last_name'];
  $_SESSION['emailaddr'] = $_POST['email'];
  $email_id = $_SESSION['emailaddr'];
  $mailaddr = $_POST['email'];

  $query = "select * from users where email='$email_id'";
  $num = mysqli_query($con,$query);
   if(mysqli_num_rows($num)>0)
    {
        echo '<script type="text/javascript">alert("This User already exsists pls try again !")</script>';
    }
   */
  //email sending code.......................................
  require 'phpmailer\PHPMailerAutoload.php';

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'chaitanyadave23@gmail.com';                 // SMTP username
  $mail->Password = '';                           // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465;                                   // TCP port to connect to
  $mail->setFrom('chaitanyadave23@gmail.com', 'Chaitanya');
  $mail->addAddress($_POST['email']);   // Add a recipient
  /*$mail->addAddress('ellen@example.com');               // Name is optional
  $mail->addReplyTo('info@example.com', 'Information');
  $mail->addCC('cc@example.com');
  $mail->addBCC('bcc@example.com');
  */
  /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   // Optional name
  $mail->isHTML(true);
  $url = "http://localhost/test5/register2.php/ ".md5( rand(0,1000) );                                 
  $mail->Subject = 'Verification Email';
  $mail->Body = "<div class='container'>
    <div class='alert alert-success' role='alert'>
    <h4 class='alert-heading'>Hi!</h4>
    <p>Thanks for getting started  with us! We need a little more information to complete your registration, including confirmation of your Email address.Click on the link below to activate your account !.</p>
    <hr>
    <p class='mb-0'><a href='$url'>$url</a></p>
    </div>
    </div>";
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if(!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
       echo '<script type="text/javascript">alert("A link has been sent to your email accout. Please Click on the link to activate your account!")</script>';
  }

}

?>