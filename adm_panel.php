<?php
   session_start();
   //username
   if(!isset($_SESSION['userid'])){
   	header('location:adm_panel.php');//here need to change to name
   }
   
   
   $con = mysqli_connect('localhost','root');
  
   	mysqli_select_db($con,'quizdbase');
    //  if($con){
    //    echo "sucessfull";
    //  }
    //  else{
    //    echo mysqli_error();
    //  }
   
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>RECTYLE Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- footer link -->
  <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="style.css">
  <style>
      body{
	background-color:#e6ffff;
}  
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Rectyle</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#java">java</a></p>
      <p><a href="#c">C programming</a></p>
      <p><a href="#python">Python</a></p>
    </div>
  
    <div class="col-sm-8 text-left"> 
      <!-- <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p> -->

      <!-- score display -->
    
      
        <?php
      $result = mysqli_query($con,"SELECT * FROM scoretable");
      

      if (mysqli_num_rows($result) > 0  ) {
        ?>
        <table>
          <h3> <strong>Score Table (java): </strong></h3>
  
  <thead>
    
    <th>Enrollment</th>
    <th>Total Marks</th>
    <th>Score</th>
    <!-- <td>Email id</td> -->
      </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result) ) {
  
?>
<tr>
    <!-- <td><?php //echo $rows["fullname"]?></td> -->
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["totalq"]; ?></td>
    <td><?php echo $row["score"]; ?></td>
    <!-- <td><?php// echo $row["email"]; ?></td> -->
</tr>
<?php
$i++;
  
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
     <style>
       table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
     </style> 
      

    
      
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
<!-- subject list starts from here -->
<head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float:left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}

/* apply to quiz style */
.button {
  margin-top:2px;
  /* margin-left:100px; */
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>



<div class="row" style="margin:15px;">
  <div class="column" id="java">
    <img src="images//java.jpg" alt="java" style="width:100%; height:150px;">
  <center><a href="java.php">  <button class="button">Take Quiz</button> </a></center>
  </div>
 
  <div class="column" id="c">
    <img src="images//c.jpg" alt="c" style="width:100%; height:150px; ">
    <center><a href="a_soon.php">  <button class="button">Take Quiz    </button></a></center> 
   </div>

  <div class="column" id="python">
    <img src="images//python.png" alt="python" style="width:100%; height:150px; ">
    <center> <a href="a_soon.php"> <button class="button">Take Quiz   </button></a> </center>
    </div>
</div>

  <!-- subject list ends here -->

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
    <span>About the company</span>
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