<?php
   session_start();
   //username
   if(!isset($_SESSION['username'])){
   	header('location:java.php');//here need to change to name
   }
   
   
   $con = mysqli_connect('localhost','root');
  
   	mysqli_select_db($con,'quizdbase');
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Rectyle Quiz</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="
         https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
      <style type="text/css">
         .animateuse{
         animation: leelaanimate 0.5s infinite;
         }
         @keyframes leelaanimate{
         0% { color: red },
         10% { color: yellow },
         20%{ color: blue }
         40% {color: green },
         50% { color: pink }
         60% { color: orange },
         80% {  color: black },
         100% {  color: brown }
         }
      </style>
      <style>

body{
	background-color:#e6ffff;
}
</style>
   </head>
   <body>

      <?php 
//
     // $page1 = $_GET['page'];
//
     // if($page1=="" ||  $page1==1){
     //    $page1 = 0;
     // } else{
     //    $page1 = (($page1 * 1)-1);
//
     // }
//
     // ?>
     
    

      <div>
       <!--   <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark" >  Complete Quiz Website using PHP and MYSQL using Session</h1><br>
      <div class="container "><br> -->
         <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark" >  Free online Java quiz </h1><br>
         
      
        <center> <div id="app"></div></center>
         <script>
         const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 10;
const ALERT_THRESHOLD = 5;

const COLOR_CODES = {
  info: {
    color: "green"
  },
  warning: {
    color: "orange",
    threshold: WARNING_THRESHOLD
  },
  alert: {
    color: "red",
    threshold: ALERT_THRESHOLD
  }
};

const TIME_LIMIT = 3600;
let timePassed = 0;
let timeLeft = TIME_LIMIT;
let timerInterval = null;
let remainingPathColor = COLOR_CODES.info.color;

document.getElementById("app").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div>
`;

startTimer();

function onTimesUp() {
   alert("you time is finished hit SUBMIT or LOGOUT within 5 sec");
   

  clearInterval(timerInterval);
}

function startTimer() {
  timerInterval = setInterval(() => {
    timePassed = timePassed += 1;
    timeLeft = TIME_LIMIT - timePassed;
    document.getElementById("base-timer-label").innerHTML = formatTime(
      timeLeft
    );
    setCircleDasharray();
    setRemainingPathColor(timeLeft);

    if (timeLeft === 0) {
      
      onTimesUp();
      
     
    }
  }, 1000);
}





function formatTime(time) {
  const minutes = Math.floor(time / 60);
  let seconds = time % 60;

  if (seconds < 10) {
    seconds = `0${seconds}`;
  }

  return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
  const { alert, warning, info } = COLOR_CODES;
  if (timeLeft <= alert.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(warning.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(alert.color);
  } else if (timeLeft <= warning.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(info.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(warning.color);
  }
}

function calculateTimeFraction() {
  const rawTimeFraction = timeLeft / TIME_LIMIT;
  return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
}

function setCircleDasharray() {
  const circleDasharray = `${(
    calculateTimeFraction() * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
  document
    .getElementById("base-timer-path-remaining")
    .setAttribute("stroke-dasharray", circleDasharray);
}
         </script>
      
      <style>
 
         .base-timer {
	position: relative;
	width: 50px;
	height: 50px;
  }
  
  .base-timer__svg {
	transform: scaleX(-1);
  }
  
  .base-timer__circle {
	fill: none;
	stroke: none;
  }
  
  .base-timer__path-elapsed {
	stroke-width: 7px;
	stroke: grey;
  }
  
  .base-timer__path-remaining {
	stroke-width: 7px;
	stroke-linecap: round;
	transform: rotate(90deg);
	transform-origin: center;
	transition: 1s linear all;
	fill-rule: nonzero;
	stroke: currentColor;
  }
  
  .base-timer__path-remaining.green {
	color: rgb(65, 184, 131);
  }

      </style>



      <div class="container-fluid "><br>
         <div class="container-fluid">
         
            <!-- <h1 class="text-center text-success text-uppercase animateuse" >  ThapaTechnical  Webdeveloper Quiz </h1>
            <br> -->
            <div class=" col-lg-12 text-center">
               <h3> <a href="#" class="text-uppercase text-warning"> <?php echo $_SESSION['username']; ?>,</a> Welcome to Demo Quiz </h3>
            </div>
            <br>
            <div class="col-lg-8 d-block m-auto bg-light quizsetting ">
               <div class="card">
                  <p class="card-header text-center" > <?php echo $_SESSION['username']; ?>, you have to select only one out of 4. Best of Luck :) <i class="fas fa-thumbs-up"></i>	 </p>
               </div>
               <br>
               <form action="checked.php" method="post">
                  <?php
                  $j=1;
                  //to increment questions.
                     for($i=1;$i<21;$i++){
                    
                  
                     $ansid = $i;

                     $sql1 = "SELECT * FROM `questions` WHERE `qid` = $i ";
                     	$result1 = mysqli_query($con, $sql1);
                     		if (mysqli_num_rows($result1) > 0) {
                     						while($row1 = mysqli_fetch_array($result1)) {
                     	?>				
                  <br>
                  <div class="card">
                     <br>
                     <p class="card-header">  <?php echo $j." : ". $row1['question']; ?> </p>
                     <!--second change-->
                    
                     <p class="card-header">  <?php if($row1['image']!=NULL){ echo '<img src="data:image;base64,'.base64_encode($row1['image']).'"style="width:700px; height:400px;">';} ?> </p>
                    
                     <?php
                        $sql = "SELECT * FROM `answers` WHERE `ans_id` = $i";
                        	$result = mysqli_query($con, $sql);
                        		if (mysqli_num_rows($result) > 0) {
                        						while($row = mysqli_fetch_array($result)) {
                        	?>	
                           
                     <div class="card-block">
                        <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $ansid; ?>" value="<?php echo $row['aid']; ?>" > <?php echo $row['answer']; ?> 
                        <br>
                     </div>
                     <?php
                     
                        
                        }  }
                        $ansid = $ansid + $i;
                   
                        } }
                      $j++;
                      }
                        
                     ?>
                  </div>

                  <br>
                  <input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>
               </form>
               <p id="letc"></p>
            </div>
            <br>
            <a href="logout.php" class="btn btn-primary d-block m-auto text-white" > Logout </a> <br>
         </div>
         <br>
         <footer>
            <h5 class="text-center"> &copy2021 RECTYLE GROUPS </h5> 
         </footer>
      </div>


      <?php

      $startlimit  = 0;
      $q =" select aid from answers";
      $query = mysqli_query($con,$q);
      $lastpage = mysqli_num_rows($query);

      $totalpage = ceil($lastpage / 2);
      ?>
      <div class="m-auto"><br>
         <ul class="pagination">
      <?php
      for($i=1; $i<=10; $i++){
         ?>
      
      <li class="float-left list-unstyled page-item" > <a href="java.php?page=<?php echo $i; ?>" class="page-link">  <?php  echo $i;  ?> </a> </li>
      
       <?php  
           }
        ?>
        </ul>
      </div>



   </body>
</html>
