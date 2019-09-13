
<?php
session_start();
include('includes\header.php'); 
include('includes\sidebar.php');
include('Config/db_config.php');

if(!isset($_SESSION['name'])){
    header( "Location:http://localhost/food-call/index.php");
}

$email=$_SESSION['name'];
$query = "SELECT * from login where email_id = '$email';";
$query_run = mysqli_query($con,$query); 

if($query_run) $row = mysqli_fetch_array($query_run);                   
$pass=$row['password'];
  
if(isset($_POST['save']))
{

    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $confrmpass = $_POST['confrmpass'];

    if($oldpass==$pass){
        $query = "UPDATE login set password = '$newpass' WHERE email_id = '$email';";
        $query_run=mysqli_query($con,$query);

        if($query_run){                  
            echo '<script>alert("Password Changed Successfully !");</script>';          
        }
        else{
            echo '<script>alert("DB error");</script>';             
        }
    }
    else{
        echo '<script>alert("Please Enter Correct Old Password");</script>';
    }
    
}   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="CSS/card.css">
    <link rel="stylesheet" href="CSS/button.css">
    <link rel="stylesheet" href="CSS/cart.css">

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Change Credentials</title>
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
    <div id="maincontent">
                <div class="card card-4" style="width: fit-content; margin:10px;position: relative;left: 300px;">
                <div class="card-body">
                    <h2 class="title">Change Credentials</h2>
                    <form action="" method="post">
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Old Password</label>
                                    <input class="input--style-4" type="password" name="oldpass">
                                </div>
                            </div>
                           
                        </div>
                        <div class="row row-space">
                             <div class="col-4">
                                <div class="input-group">
                                    <label class="label">New Password</label>
                                    <input class="input--style-4" type="password" name="newpass">
                                </div>
                            </div>
                            
                        </div>
                       
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="Password" name="confrmpass">
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="save" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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