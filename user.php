<?php include('includes\header.php') ?>
<?php include('includes\sidebar.php') ?>
<?php include ('Config/db_config.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Here</title>
  <link rel="stylesheet" href="css/card.css">
  <link rel="stylesheet" href="css/button.css">
</head>
<body>
	<div id="maincontent">
		<?php

		$result = mysqli_query($con,"SELECT * FROM main_menu");

		while($row = mysqli_fetch_array($result))
		{
		    
		    echo"

			<div class='card'>
				
			  <img src='images/home.jpg' alt='Avatar' style='width:100%'>
			
			  <div class='container'>
			    <h4><b>{$row['name']}</b></h4> 
			    <p>Architect & Engineer</p> 
			  </div>
			  <div>
			  	<button class='button'>Add</button>
			  </div>
			</div>";

		}





		
		?> 			  			  
</body>
</html>





<?php
        

  
?>

