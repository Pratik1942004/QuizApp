<?php 

	$con = mysqli_connect('localhost','root');
	if($con){
		//echo"connection";
	}

	mysqli_select_db($con,'quizdbase');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rectyle Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>

body{
	background-color:#e6ffff;
}      
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .responsive{
    width: 100%;
  }
  </style>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup1.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about_s">About</a>
      </li>    
    </ul>
  </div>  
</nav>

<img src="cover.png" alt="Nature" class="responsive" width="600" height="300">

<!-- Sign Up form -->
<center>
<div class="col-lg-6">

			<br>
				<div class="card">
				
					<h4 class="card-header text-center"> SignUp Here </h4>
					<br>
					<form action="registration.php" method="post">
					<!--fullname-->
					<div class="form-group">
						<label for="fullname" > Enter Name: </label>
							<input type="text" name="fullname" id="fullname" class="form-control" required>
						</div>


						<div class="form-group">
						<!--first change-->
							<label for="user"> Enrollment: </label>
							<input type="text" name="user" id="user" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="pass"> Password: </label>
							<input type="password" value="" name="pass" id="password" class="form-control" required>
							<input type="checkbox" onclick="myFunctions()"> Show Password
						</div>
						<center><p>------------------</p></center>
						<button class="btn btn-success d-block m-auto" type="submit"> Signup </button>
            <br>
						
            <!-- put this in button to use modal... (data-toggle="modal" data-target="#myModal") -->
             <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Confirmation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        YOU SIGNED UP...
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Ok</button>
      </div>

    </div>
  </div>
</div>

					</form>

				</div>

			</div>
</center>
            <!-- form end -->
            <script>
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



       

			<!-- The content of your page would go here. -->

      <footer class="footer-distributed">

<div class="footer-left">

  <h3>Rectyle<span>Developments</span></h3>

  <p class="footer-links">
    <a href="index.php">Home</a>
    ·
    <a href="#">Blog</a>
    ·
    <a href="#">Pricing</a>
    ·
    <a href="#">About</a>
    ·
    <a href="#">Faq</a>
    ·
    <a href="#">Contact</a>
  </p>

  <p class="footer-company-name">Rectyle &copy; 2021</p>
</div>

<div class="footer-center">

  <div>
    <i class="fa fa-map-marker"></i>
    <p><span>Government Polytechnic </span> solapur, Maharastra</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>+91 8928287680</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="/cdn-cgi/l/email-protection#0b787e7b7b64797f4b6864667b6a657225686466"><span class="__cf_email__" data-cfemail="25565055554a575165464a4855444b5c0b464a48">rectyle1904@gmail.com</span></a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span id="about_s">About the company</span>
Company was established in April 2020 by Mr.Pratik Bansode. The Motive of company is to reach people as possible as and help them for online marketting.  </p>

  <div class="footer-icons">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-github"></i></a>

  </div>

</div>

</footer>
</body>
</html>