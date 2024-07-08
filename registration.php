<?php

session_start();
header('location:signup_msg.php');//here need to change name

$con = mysqli_connect('localhost','root');
	if($con){
		echo"connection";
	}

	mysqli_select_db($con,'quizdbase');

    $fullname=$_POST['fullname'];//name
	$username = $_POST['user'];//enrollment
	$password = $_POST['pass'];
	
if($username && $password !=NULL){
	// echo $username;
	// echo $password;

	$check = "select * from quizregistration where fullname='$fullname' && user='$username' && pass='$password' ";
	$resultcheck = mysqli_query($con,$check);	

	 $row = mysqli_num_rows($resultcheck);
			if($row == 1){
			
				
			}	else{

				$q = "insert into quizregistration(fullname,user, pass) values ('$fullname','$username', '$password')"  ;

				$result = mysqli_query($con,$q);

			}


		}
?>


