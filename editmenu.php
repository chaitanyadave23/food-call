<?php
include('includes\header.php'); 
include('includes\adminsidebar.php');
include('Config/db_config.php');
?>
<html>  
    <head>  
        <title>Edit Menu</title>  
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
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var name = $('#name').text();  
        var price = $('#price').text();  
        if(name == '')  
        {  
            alert("Enter Name");  
            return false;  
        }  
        if(price == '')  
        {  
            alert("Enter Price");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{name:name, price:price},  
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
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.name', function(){  
        var id = $(this).data("id1");  
        var name = $(this).text();  
        edit_data(id, name, "name");  
    });  
    $(document).on('blur', '.price', function(){  
        var id = $(this).data("id2");  
        var price = $(this).text();  
        edit_data(id,price, "price");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
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