<?php
include('includes\header.php'); 
include('includes\adminsidebar.php');
include('Config/db_config.php');
?>

<html>  
    <head>  
        <title>Add Drop Students</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

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
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"Student_select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){
        var regno = $('#regno').text();  
        var name = $('#name').text();
        var email = $('#email').text();  
        var phno = $('#phno').text();
        var block = $('#block').text();
        if(regno == '')  
        {  
            alert("Enter Registration Number");  
            return false;  
        }    
        if(name == '')  
        {  
            alert("Enter Name");  
            return false;  
        } 
        if(email == '')  
        {  
            alert("Enter E-mail Id");  
            return false;  
        } 
        if(phno == '')  
        {  
            alert("Enter Contact details");  
            return false;  
        }
        if(block == '')  
        {  
            alert("Enter Hostel details");  
            return false;  
        }   
        $.ajax({  
            url:"Student_insert.php",  
            method:"POST",  
            data:{regno:regno, name:name, email:email, phno:phno, block:block},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"Student_edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }
    $(document).on('blur', '.regno', function(){  
        var id = $(this).data("id1");  
        var regno = $(this).text();  
        edit_data(id, regno, "regno");  
    }); 
    $(document).on('blur', '.name', function(){  
        var id = $(this).data("id2");  
        var name = $(this).text();  
        edit_data(id, name, "name");  
    });
    $(document).on('blur', '.email', function(){  
        var id = $(this).data("id3");  
        var email = $(this).text();  
        edit_data(id,email, "email");  
    }); 
    $(document).on('blur', '.phno', function(){  
        var id = $(this).data("id4");  
        var phno = $(this).text();  
        edit_data(id,phno, "phno");  
    });
    $(document).on('blur', '.block', function(){  
        var id = $(this).data("id5");  
        var block = $(this).text();  
        edit_data(id,block, "block");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id6");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"Student_delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>