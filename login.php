<?php
session_start();
 if(!isset($_SESSION['name'])){
  if(isset($_POST['login']))
      {           
        $username = $_POST['username'];
        $password = $_POST['password'];
        //$_SESSION['username'] = $username;
        $query = "select * from login where email_id='$username' and password='$password'; ";
        $query_run = mysqli_query($con,$query);
        
        if($query_run)
        {
          if(mysqli_num_rows($query_run) > 0)
          { 
            $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
            $_SESSION['name'] = $username;  
            echo "hello";

            header( "Location:http://localhost/food-call/user.php");
          }
          else
          {
            echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
          }
        }
        else
        {
          echo '<script type="text/javascript">alert("Database Error")</script>';
        }
      }
 }
 else{
  header( "Location:http://localhost/food-call/user.php");
 }

?>