<?php 
session_start();
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
  <!-- animation links -->
  <!-- end here -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <style>

body{
	background-color:#e6ffff;
  
}      
  .fakeimg {
    height: 200px;
    background-image:url("java.jpg");
    radius: 50%;
  }
  /* header image style */
  .jumbotron {
  background-image:  url("quiz.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.responsive {

  width: 100%;

   /* height: auto; */
}




 </style>
</head>
<body>
 

<!-- <div class="jumbotron">
  <p>hi</p>
</div> -->


<div class="header" id="myHeader">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup1.php">Register</a>
      </li>
       
         <!-- student modal login -->
         <li class="nav-item">
         <button type="button"  style="position-right: 0;"class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Student Login
  </button> &nbsp;&nbsp;
</li>
<li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
<!-- admin modal login -->
<li class="nav-item">
         <button type="button"  style="position-right: 0;"class="btn btn-primary" data-toggle="modal" data-target="#myaModal">
    Admin Login
  </button>
</li>
    </ul>
</div>
</nav>
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <center>
          <div class="col-lg-6">
			<br>
				<div class="card">
				
					<h4 class="card-header text-center"> Student Login  </h4>
					<br>
					<form action="login.php" method="post">
						<div class="form-group">
							<label for="user "> Enrollment: </label>
							<input type="text" name="user" id="user" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="pass"> Password: </label>
							
							<input type="password" value="" name="pass" id="pass" class="form-control" required>
							<input type="checkbox"  onclick="myFunction()"> Show Password
							<br>
							<br>
							
							
						
						</div>
						<center><p>------------------</p></center>
						<button class="btn btn-success d-block m-auto" type="submit"> Login </button>
            <br>
					</form>
				
				</div>
			</div>
            </center>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- Admin Modal -->
<!-- The Modal -->
<div class="modal fade" id="myaModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <center>
          <div class="col-lg-6">
			<br>
				<div class="card">
				
					<h4 class="card-header text-center"> Admin Login  </h4>
					<br>
					<form action="adm_login.php" method="post"><!--need to change name-->
						<div class="form-group">
							<label for="userid "> UserId: </label>
							<input type="text" name="userid" id="user" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="pass"> Password: </label>
							
							<input type="password" value="" name="pass" id="pass_a" class="form-control" required>
							<input type="checkbox"  onclick="myFunctions()"> Show Password
							<br>
							<br>
							
							
						
						</div>
						<center><p>------------------</p></center>
						<button class="btn btn-success d-block m-auto" type="submit"> Login </button>
            <br>
					</form>
				
				</div>
			</div>
            </center>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- password check script -->
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
		  var x=document.getElementById("pass_a");
		  if(x.type==="password"){
			  x.type="text";

		  }
		  else{
          x.type="password";
		  }
	  }
</script>

<img src="cover.png" alt="Nature" class="responsive" width="600" height="300">
 

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      
     <center> <img src="images//photo_me.jpg" alt="photo_me" clas="image"style="width:60%; height:200px; border-radius:50%;"></center>
      <p>Hi my self <b>Pratik.D.Bansode</b> I am the Founder of Rectyle Group's... Currently pursuing in 3rd year of Diploma at Government Polytechnic, Solapur as well as working as CEO (Chief Executive Officer) of Rectyle Group's.</p>
      <br>
      <h3>For More...</h3>
      <p>Visit following quick links </p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#guid">Guid</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Projects</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Why Is Programming Important?</h2>
      <h5>September 12, 2021 </h5>
      <img src="images//programming_why.jpg" alt="java" style="width:100%; height:250px;">
      <p></p>
      <p>Computer programming has an integral role in our world. You would not be reading this article without it. In fact, without computer programming you would not be able to use your cell phone, computer or smart TV. Learning the fundamentals of programming can set you apart from your counterparts, giving you a competitive edge in this technology-driven world. Earning a computer programming degree can help you innovate and create solutions for a global society.</p>
      <br>
      <h2>Free Programming Quiz</h2>
      <h5>September 12, 2021</h5>
      <img src="quiz.jpg" alt="java" style="width:100%; height:250px;">
      <p></p>
      <p>We provide you free quiz on various programming language with very simple steps which may help you to test your knowledge. </p>
      <p>Want to test your knowledge of a specific language or topic? Give our free coding quizzes a try! Each quiz has 10 questions total picked at random from a larger group, and they’re all multiple choice. Every time you take the test it will be slightly different.</p>
    </div>
  </div>
</div>

<!-- <div class="jumbotron text-center " style="margin-bottom:0">
  <p>Footer</p> -->
 
<!-- </div> -->
<!-- The content of your page would go here. -->

<!-- step to use -->
<div class="container">
  <h3 id="guid">Steps to Signup and Login...</h3>
<ol>
  <li>Firstly at the top of page you see <a href="signup1.php">Registration</a>, You will redirected to the Signup page.</li>
  <li>Enter the following (Name,Enrollment,Password) remember the password for login.</li>
  <li>For login<a data-toggle="modal" data-target="#myModal" href=""> click here</a> or at top click on Student login you see popup window Enter Enrollment and Password you will got ot admin panel</li>
</ol>
  </div>
<style>
  @import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");
  
  ol {
    max-width: 350px;
    counter-reset: my-awesome-counter;
    list-style: none;
    padding-left: 40px;
  }
  ol li {
    margin: 0 0 0.5rem 0;
    counter-increment: my-awesome-counter;
    position: relative;
  }
  ol li::before {
    content: counter(my-awesome-counter);
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
    position: absolute;
    --size: 32px;
    left: calc(-1 * var(--size) - 10px);
    line-height: var(--size);
    width: var(--size);
    height: var(--size);
    top: 0;
    transform: rotate(-10deg);
    background: black;
    border-radius: 50%;
    text-align: center;
    box-shadow: 1px 1px 0 #999;
  }
  
  body {
   
    line-height: 1.4;
    font-size: 90%;
    
  }
</style>
<!-- steps end here -->

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
    <p id="contact">+91 8928287680</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="/cdn-cgi/l/email-protection#0b787e7b7b64797f4b6864667b6a657225686466"><span class="__cf_email__" data-cfemail="25565055554a575165464a4855444b5c0b464a48">rectyle1904@gmail.com</span></a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span id="about">About the company</span>
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