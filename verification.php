
<?php include('Config/db_config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="CSS/card.css">
    <link rel="stylesheet" href="CSS/button.css">
    <link rel="stylesheet" href="CSS/cart.css">
     <link rel="stylesheet" href="CSS/signup.css">

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Verfiy OTP</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="CSS/main.css" rel="stylesheet" media="all">

</head>
<body>
            <div class="signup">
                <div class="formpos">
                <div class="card card-4" style="width: 75%; margin:10px; position: relative; left: 300px;">
                    <div class="card-body">
                        <h2 class="title">OTP has been sent to your registered email ID and Phone Number. Please verify your account by entering the OTP below. !</h2>
                        <form method="POST" action="">
                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">Email OTP</label>
                                        <input class="input--style-4" type="text" name="emailotp">
                                    </div>
                                </div>                                
                            </div>
                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">Mobile OTP</label>
                                        <div class="input-group-icon">
                                            <input class="input--style-4" type="text" name="mobileotp">
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" name="checkotp" type="submit">Verify OTP</button>
                            </div>
                        </form>
                    </div>
                </div>
           </div>
       </div>
           <div class="sideimage">
            <img src="Images\chef.jpg" style="width: 100%; height: 100%;">
           </div>           

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="JS/global.js"></script>

</body>
</html>
<?php


if(isset($_POST['checkotp'])){
    if(isset($_COOKIE['otp']))
        echo $_COOKIE['otp'];
    setcookie('otp','567765');
    echo $_COOKIE['otp'];
/*
    $emailotp=$_POST['emailotp'];
    $mobileotp=$_POST['mobileotp'];

    if($emailotp==$_COOKIE['otp'] && $mobileotp==$_COOKIE['otp']){

        $name = $_POST['name'];
        $regno = $_POST['regno'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phno = $_POST['phno'];
        $pass = $_POST['pass'];
        $confrmpass = $_POST['confrmpass'];


        $query = "select * from login where email_id='$email'";
        $num = mysqli_query($con,$query);
        if(mysqli_num_rows($num)>0)
            {
                echo '<script type="text/javascript">alert("This Student already exsists pls try again !")</script>';
            }
        else
        {     
            $query = "insert into login values('$regno','$name','$email','$pass','$phno','$gender','$dob','','');";
            $query_run = mysqli_query($con,$query);                            
            if($query_run)
            {
                echo '<script type="text/javascript">alert("Registered Sucessfully!..")</script>';
            }
            else
            {
                echo '<script type="text/javascript">alert("Error occured")</script>'; 
            }
        }         
    }
    
    else{
        echo '<script type="text/javascript">alert("Wrong OTP. Please try again!..")</script>'; 
    }*/            


}
?>

