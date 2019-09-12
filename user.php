
<?php
session_start();

include('includes\header.php'); 
include('includes\sidebar.php');
include('Config/db_config.php');

if(!isset($_SESSION['name'])){
	header( "Location:http://localhost/food-call/index.php");
	//echo "sesion is set";
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Order Here</title>
  <link rel="stylesheet" href="CSS/card.css">
  <link rel="stylesheet" href="CSS/button.css">
  <link rel="stylesheet" href="CSS/cart.css">
<<<<<<< HEAD
  <style>
  	#maincontent {
	  transition: margin-left 0s;
	  padding: 16px;
	  margin-left: 165px;
	  background-color: white;	  
}
  </style>
=======

 
>>>>>>> cd18aca7d6673daa0639fba531de8da7373b8ca6
</head>
<body>
	<div id="maincontent">
		<?php

		$result = mysqli_query($con,"SELECT * FROM main_menu");
		$i=0;
		while($row = mysqli_fetch_array($result))
		{
		    echo"
			<div class='card'>
		
			  <img src='images/home.jpg' alt='Avatar' style='width:100%'>
			
			  <div class='container'>

			    <h4><b><p id='n".$i."'>{$row['name']}</p></b></h4> 
			    <p>Architect & Engineer</p> 
			  </div>
			  <div>
			  	<button class='button' value='n".$i."'onclick='add(this)'>Add</button>
			  </div>
			</div>";
			$i+=1;
		}
		?>	

		<div id="cart">
			Your Orders
			<div id="orders">
			</div>
			<button id="btn submit">Submit</button>
		</div>
	</div>


			<script>
			var na;
			var iter;
			function add(element){
				iter=element.value;
				na = document.getElementById(iter).textContent;
				// document.getElementById("cart").innerHTML=na;

				var node = document.createElement("p");                 
				var textnode = document.createTextNode(na);         
				node.appendChild(textnode);                         
				document.getElementById("orders").appendChild(node);
			}
		</script>		
</body>
</html>
<<<<<<< HEAD
=======

>>>>>>> cd18aca7d6673daa0639fba531de8da7373b8ca6

