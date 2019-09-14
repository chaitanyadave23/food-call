<?php
include('Config/db_config.php');
/*
$item_name=array();
$price=array();
$quantity=array();

foreach ($variable as $value) {
	$query = "select * from t"
}*/

$sugges=$_POST['name'];
$email=$_POST['price'];
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