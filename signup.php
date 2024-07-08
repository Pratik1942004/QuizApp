
<?php 

	$con = mysqli_connect('localhost','root');
	if($con){
		//echo"connection";
	}

	mysqli_select_db($con,'quizdbase');

?>





<!DOCTYPE html>
<html>
<head>
	<title>Online Quiz. </title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet"> 
	
<!-- 
	 font-family: 'Montserrat', sans-serif; 
	font-family: 'Open Sans', sans-serif;
	-->
<style>

body{
	background-color:#fefbd8;
}
</style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>
<br>

	<div class="container">
		<h1 class="text-center" text-color="white" > Welcome to Quiz World </h1><br>
		<style>
		h1{
			background-color:grey;
		}
		</style>

		<div class="row">
			
			<div class="col-lg-6">
			<br>
				<div class="card">
				
					<h4 class="card-header text-center"> Login Form </h4>
					<br>
					<form action="login.php" method="post">
						<div class="form-group">
							<label for="user "> Enrollment: </label>
							<input type="text" name="user" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass"> Password: </label>
							
							<input type="password" value="" name="pass" id="pass" class="form-control">
							<input type="checkbox"  onclick="myFunction()">Show Password
							<br>
							<br>
							<br>
							<br>
							
							<p></p>
						</div>
						<center><p>------------------</p></center>
						<button class="btn btn-success d-block m-auto" type="submit"> Login </button>
					</form>
				
				</div>
			</div>
			<br>
			<br>

			<div class="col-lg-6">
			<br>
				<div class="card">
				
					<h4 class="card-header text-center"> SignUp Form </h4>
					<br>
					<form action="registration.php" method="post">
					<!--fullname-->
					<div class="form-group">
						<label for="fullname "> Enter Name: </label>
							<input type="text" name="fullname" id="fullname" class="form-control">
						</div>


						<div class="form-group">
						<!--first change-->
							<label for="user "> Enrollment: </label>
							<input type="text" name="user" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass"> Password: </label>
							<input type="password" value="" name="pass" id="password" class="form-control">
							<input type="checkbox" onclick="myFunctions()">Show Password
						</div>
						<center><p>------------------</p></center>
						<button class="btn btn-success d-block m-auto" type="submit"> Signup </button>
						<div class="duplicate"> </div>
					</form>

				</div>
			</div>
				</div>
			</div>

		</div>

	</div>
	<br>
	<br>
	<br>
	<script>
	  function myFunction(){
		  var x=document.getElementById("pass");
		  if(x.type==="password"){
			  x.type="text";

		  }
		  else{
          x.type="password";
		  }
	  }

	  function myFunctions(){
		  var z=document.getElementById("password");
		  if(z.type==="password"){
			  z.type="text";

		  }
		  else{
          z.type="password";
		  }
	  }
	  

	</script>
		<footer >
	<style>
	footer{
		background-color:black;
		width:100%;
		color:white;
		text-align:center;
		padding-top:10px; 
		height:auto;
		padding-bottom:0px;
	}
	h4{
		bottom:10px;
	}

	</style>
<h4>&copy2021 RECTYLE GROUP</h4>
      
<center>
<p>Website is Designed and Managed by <strong> Pratik Bansode.</strong><p>
</center>

</footer>
</body>
</html>
