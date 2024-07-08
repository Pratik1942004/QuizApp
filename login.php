<?php
session_start();

$con = mysqli_connect('localhost','root');
	if($con){
		echo"connection";
	}

	mysqli_select_db($con,'quizdbase');

	$username = $_POST['user'];
	$password = $_POST['pass'];

//to check logged in or not
	// $login="select username from user where username= '$username' ";
	// $res= mysqli_query($con,$login);
	// $r = mysqli_num_rows($res);
	// if($r>0){
	// 	header('location:message.php');
	// }
	if(true){

$q = " select * from quizregistration where user = '$username' && pass='$password' ";
$result = mysqli_query($con,$q);

$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['username'] = $username;
	// $userquery = " insert into user(username) values ('$username')";
	// $userresult = mysqli_query($con,$userquery);

	header('location:stud_panel.php');//here need to change name	
}else{
	// echo'<script>alert("Invalid Username or Password") </script>';
	header('location:invalid.php');//here need to change name
	
}
	}
?>
}
<script>
	function jsfuction{
		alert("Invalid Username or Password !!!");
	}
</script>
