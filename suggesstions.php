
<?php
session_start();

include('includes\header.php'); 
include('includes\sidebar.php');
include('Config/db_config.php');

if(!isset($_SESSION['name'])){
    header( "Location:http://localhost/food-call/index.php");
}

if(isset($_POST['submit'])){

    $sugges = $_POST['sugges'];
    $email = $_SESSION['name'];
    $query = "insert into suggestions values('$email','$sugges');";
    $query_run = mysqli_query($con,$query);                            
    if($query_run)
    {
        echo '<script type="text/javascript">alert("Your Suggestion has been sent to the Manager !")</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("Error occured")</script>'; 
    }
                        
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Here</title>
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
    <title>Profile</title>

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
                <div class="card card-4" style="width: 500px; margin:10px;position: relative;left: 300px;">
                    <div class="card-body">
                        <h2 class="title">Please give your Suggestions Below !</h2>
                        <form method="POST">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <textarea style="height: 150px; width: 220%;"class="input--style-4" type="text" rows="5" name="sugges"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" name="submit" type="submit">Submit</button>
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
    <script src="js/global.js"></script>

</body>
</html>