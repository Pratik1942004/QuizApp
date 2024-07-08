<?php
session_start();

$con = mysqli_connect('localhost','root');
	if($con){
		echo"connection";
	}

	mysqli_select_db($con,'quizdbase');

	if(true){
    
    //to check logged in or not
     $username =  $_SESSION['username'];
	$login="select username from user where username= '$username' ";
	$res= mysqli_query($con,$login);
	$r = mysqli_num_rows($res);
	if($r>0){
		header('location:message.php');
	}
	else{
    $username = $_SESSION['username'];
	$userquery = " insert into user(username) values ('$username')";
	$userresult = mysqli_query($con,$userquery);

	header('location:java.php');//here need to change name	
    
    }
}
?>