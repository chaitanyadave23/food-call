
<?php
session_start();

include('includes\header.php'); 
include('includes\sidebar.php');
include('Config/db_config.php');

if(!isset($_SESSION['name'])){
	header( "Location:http://localhost/food-call/index.php");
	echo "sesion is set";
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Order Here</title>
  <link rel="stylesheet" href="CSS/card.css">
  <link rel="stylesheet" href="CSS/button.css">
  <link rel="stylesheet" href="CSS/cart.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
			
		</div>
		<div id="placeorder">
			<button type="submit" id="placeorder" class="btn btn-outline-success btn-lg btn-block">Place Order</button>
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


	/*$(function (){

		$('#placeorder').on('click',function() {
			var order = {
				name: "hello";
				price="100";

			}
			$.ajax({
				type:'POST',
				url: 'addOrder.php',
				data:order,
				success: function(){

				}

			});
		});

		
	});*/
	</script>	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
