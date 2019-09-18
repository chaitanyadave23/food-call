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
    $result = mysqli_query($con,"select * from registered_students;");

    echo "<table class='table table-striped'>
    <tr>
    <th>ID</th>
    <th>Reg.No.</th>
    <th>Name</th>
    <th>E-mail</th>
    <th>Contact No.</th>
    <th>Hostel Block</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
     echo "<td>" . $row['id']. "</td>";
     echo "<td>" . $row['Regno']. "</td>";
     echo "<td>" . $row['Name']. "</td>";
     echo "<td>" . $row['E-mail']. "</td>";
     echo "<td>" . $row['phno']. "</td>";
     echo "<td>" . $row['block']. "</td>";
    echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
  </div>
  
</body>
</html>




