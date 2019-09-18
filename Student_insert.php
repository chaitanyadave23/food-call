<?php  
$connect = mysqli_connect("localhost", "root", "", "food_call");
$sql = "INSERT INTO registered_students(Regno, Name,E-mail,phno,block) VALUES('".$_POST["regno"]."','".$_POST["name"]."','".$_POST["email"]."', '".$_POST["phno"]."','".$_POST["block"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>

