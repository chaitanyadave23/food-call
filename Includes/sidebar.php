<!DOCTYPE html>
<html>
<head>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="CSS\sidebar.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>  

<div id="mySidenav" class="sidenav">
  <a href="user.php" id="profile_link"><i class='fas fa-hamburger'></i>&nbsp;&nbsp;Order Food</a>
  <a href="profile.php" id="profile_link"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Profile</a>
  <a href=""><i class='fas fa-file-alt'></i>&nbsp;&nbsp;Order History</a>
  <a href="suggesstions.php"><i class='fas fa-file-alt'></i>&nbsp;&nbsp;Suggestions</a>
  <a href="ChangeCredentials.php"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Change Credentials</a>
  <a href="#"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;PerDay Average</a>
 
</div>
<script>


function openNav() {
  if(document.getElementById("mySidenav").style.width == "165px")
  {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("maincontent").style.marginLeft = "0";
  }
  else
  {
    document.getElementById("mySidenav").style.width = "165px";
    document.getElementById("maincontent").style.marginLeft = "165px";
  }
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("maincontent").style.marginLeft= "0";
}
</script>

</body>
</html> 
