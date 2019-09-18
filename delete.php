<?php  
	$connect = mysqli_connect("localhost", "root", "", "food_call");
	$sql = "DELETE FROM cart WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>