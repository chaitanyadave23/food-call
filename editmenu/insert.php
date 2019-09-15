<?php  
$connect = mysqli_connect("localhost", "root", "", "food_call");
$sql = "INSERT INTO cart(name, price) VALUES('".$_POST["name"]."', '".$_POST["price"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>