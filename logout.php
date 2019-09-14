<?php
session_start();
if(isset($_SESSION['name'])){
  session_destroy();
  header("Location:http://localhost/food-call/index.php");
}
else header("Location:http://localhost/food-call/index.php");
//hello
?>