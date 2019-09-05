<?php include ('Config/db_config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS\navbar.css" type="text/css">
</head>
<body>

<div class="header">
  <a img href="#default" class="logo"><img alt="Food Call" src="Images\logo.jpg" width=60 height=60></a>

  <div class="header-right">
  <button type="button" class="btn" data-toggle="modal" data-target="#login">
  	Login
	</button>
  <button type="button" class="btn" data-toggle="modal" data-target="#signup">
    Sign Up
  </button>
    <a class ="a" href="#home">Sign Up</a>
    <a class ="a" href="#home">Sign Up</a>
   
  </div>
</div>

<!-- Button trigger modal -->


<!--Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <button type="button" class="close" style="float:right;display:inline;" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
    <center>
    <div style="text-size:40px;" id="modal-header"><b>Sign up or log in to FoodCall</b></div>
    </center>
      <div class="modal-header">
      <button class="loginBtn loginBtn--facebook">
          Login with Facebook
        </button>

        <button class="loginBtn loginBtn--google">
          Login with Google
        </button>
      </div>
      <!-- <div class="ui horizontal divider">
            or
      </div> -->

      <div class="modal-footer">
      <div class="modal-body">
      <form action="" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1"style="text-size:40px;"><b>Email address</b></label>
		    <input type="email" style="height:60px;" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1"style="text-size:40px;"><b>Password</b></label>
		    <input type="password"  style="height:60px;" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>
		  <button type="submit" name="login" class="btn btn-primary">Submit</button>
		</form>
       </div>
    </div>
  </div>
</div>
</div>

 




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php include('login.php') ?> 
