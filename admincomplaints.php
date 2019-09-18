<?php
include('includes\header.php'); 
include('includes\adminsidebar.php');
include('Config/db_config.php');
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
            .container{
                transition: margin-left 0s;
                padding: 16px;
                margin-left: 165px;
                background-color: white;
                position: absolute;
                top: 8.5%;
                left: 10px;
            }
</style>

</head>
<body>
  <div class="container">
    <?php
    $result = mysqli_query($con,"Select * from suggestions");

    echo "<table class='table table-striped'>
    <tr>
    <th>E-mail</th>
    <th>Complaint</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
     echo "<td>" . $row['email']. "</td>";
     echo "<td>" . $row['Suggestion']. "</td>";
     echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
  </div>
  
</body>
</html>




