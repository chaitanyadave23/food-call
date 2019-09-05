<!DOCTYPE html>
<html>
<head>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="CSS\sidebar.css" type="text/css" rel="stylesheet">
</head>

<body>  
<script type="text/javascript">
  $(document).ready(function(){
     $("#profile_link").click(function(){
         $("#profile").load("index.php");
     });
  });

</script>
<div id="mySidenav" class="sidenav">
  <a href="#" id="profile_link">Profile</a>
  <a href="#">Order History</a>
  <a href="#">Suggestions</a>
  <a href="#">Change Credentials</a>
  <a href="#">PerDay Average</a>
  <a href="#">User Log</a>
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
