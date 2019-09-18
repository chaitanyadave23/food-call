<?php  
 $connect = mysqli_connect("localhost", "root", "", "food_call");  
 $output = '';  
 $sql = "SELECT * FROM registered_students ORDER BY id ASC";  
 $result = mysqli_query($connect, $sql);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-striped">  
                <tr>  
                     <th width="5%">Id</th>  
                     <th width="10%">Reg.No</th>  
                     <th width="20%">Name</th>
                     <th width="30%">E-mail</th>  
                     <th width="10%">Contact No.</th>
                     <th width="10%">Hostel Block</th>
                     <th width="10%">Delete</th> 
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
    if($rows > 10)
    {
      $delete_records = $rows - 10;
      $delete_sql = "DELETE FROM cart LIMIT $delete_records";
      mysqli_query($connect, $delete_sql);
    }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="regno" data-id1="'.$row["id"].'" contenteditable>'.$row["Regno"].'</td>  
                     <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row["Name"].'</td>  
                     <td class="email" data-id2="'.$row["id"].'" contenteditable>'.$row["E-mail"].'</td> 
                     <td class="phno" data-id2="'.$row["id"].'" contenteditable>'.$row["phno"].'</td>
                     <td class="block" data-id2="'.$row["id"].'" contenteditable>'.$row["block"].'</td>
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="regno" contenteditable></td>  
                <td id="name" contenteditable></td>
                <td id="email" contenteditable></td>  
                <td id="phno" contenteditable></td>
                <td id="block" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>
          <td id="regno" contenteditable></td>  
          <td id="name" contenteditable></td>
          <td id="email" contenteditable></td>  
          <td id="phno" contenteditable></td>
          <td id="block" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>