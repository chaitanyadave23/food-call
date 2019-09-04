<?php include('includes\header.php') ?>
<?php include('includes\sidebar.php') ?>
<?php include ('Config/db_config.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Here</title>
  <link rel="stylesheet" href="css/card.css">
  <link rel="stylesheet" href="css/button.css">
  <link rel="stylesheet" href="CSS/cart.css">
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

			<div id="cart">Your Orders</div>
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
				document.getElementById("cart").appendChild(node);
			}
		</script>
</body>
</html>
<?php
        

  
?>

