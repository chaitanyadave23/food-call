<!DOCTYPE html>
<html>
<head>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="CSS\sidebar.css" type="text/css" rel="stylesheet">
</head>

<body>  

<div id="mySidenav" class="sidenav">
  <a href="#">Edit Menu</a>
  <a href="#">Complaints</a>
  <a href="#">Registered Students</a>
  <a href="#">Remove Students</a>
  <a href="#">Add Students</a>
  <a href="#">Total Day Revenue</a>
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
